<?php

namespace App\Modules\PublicUI;

use App\Modules\Survey\SurveySession;
use App\Modules\Survey\Contact;
use App\Modules\Compliance\ComplianceIndicator;
use App\Modules\Compliance\ComplianceEvaluation;
use App\Modules\Compliance\ComplianceAnswer;
use App\Modules\Compliance\ImprovementPlan;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SurveyController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/', name: 'app_public_welcome')]
    public function welcome(): Response
    {
        return $this->render('public/welcome.html.twig');
    }

    #[Route('/survey/regulations', name: 'app_public_regulations')]
    public function regulations(): Response
    {
        return $this->render('public/pdf.html.twig');
    }

    #[Route('/survey/start', name: 'app_public_survey_start')]
    public function startSurvey(Request $request): Response
    {
        $session = new SurveySession();
        $this->em->persist($session);
        $this->em->flush();

        $request->getSession()->set('survey_token', $session->getSessionToken());
        return $this->redirectToRoute('app_public_contact');
    }

    #[Route('/survey/contact', name: 'app_public_contact')]
    public function contact(Request $request): Response
    {
        $token = $request->getSession()->get('survey_token');
        if (!$token) {
            return $this->redirectToRoute('app_public_welcome');
        }

        $session = $this->em->getRepository(SurveySession::class)->findOneBy(['sessionToken' => $token]);
        if (!$session) {
            return $this->redirectToRoute('app_public_welcome');
        }

        if ($request->isMethod('POST')) {
            $contact = new Contact();
            $contact->setCompanyName($request->request->get('companyName'));
            $contact->setCommercialName($request->request->get('commercialName'));
            $contact->setLegalRepresentative($request->request->get('legalRepresentative'));
            $contact->setFoundationYear((int)$request->request->get('foundationYear'));
            $contact->setPartnersCount((int)$request->request->get('partnersCount'));
            $contact->setPhone($request->request->get('phone'));
            $contact->setEmail($request->request->get('email'));
            $contact->setMainActivity($request->request->get('mainActivity'));
            $contact->setMainProduct($request->request->get('mainProduct'));
            $contact->setOtherProducts($request->request->get('otherProducts'));
            $contact->setCertifications($request->request->get('certifications'));
            $contact->setMainClients($request->request->get('mainClients'));
            $contact->setSurveySession($session);

            $this->em->persist($contact);
            $this->em->flush();

            return $this->redirectToRoute('app_public_instructions');
        }

        return $this->render('public/contact.html.twig');
    }

    #[Route('/survey/instructions', name: 'app_public_instructions')]
    public function instructions(Request $request): Response
    {
        $token = $request->getSession()->get('survey_token');
        if (!$token) return $this->redirectToRoute('app_public_welcome');

        if ($request->isMethod('POST')) {
            $tool = $request->request->get('selected_tool', 'tool1');
            $session = $this->em->getRepository(SurveySession::class)->findOneBy(['sessionToken' => $token]);
            if ($session) {
                $session->setSelectedTool($tool);
                $this->em->flush();
            }
            return $this->redirectToRoute('app_public_wizard', ['step' => 1]);
        }

        return $this->render('public/instructions.html.twig');
    }

    #[Route('/survey/wizard/{step}', name: 'app_public_wizard')]
    public function wizard(int $step, Request $request): Response
    {
        $token = $request->getSession()->get('survey_token');
        if (!$token) return $this->redirectToRoute('app_public_welcome');

        $session = $this->em->getRepository(SurveySession::class)->findOneBy(['sessionToken' => $token]);
        if (!$session) return $this->redirectToRoute('app_public_welcome');

        $areas = [
            1 => '1. Capacidad Organizativa',
            2 => '2. Disponibilidad de la Información',
            3 => '3. Capacidad de Autoevaluación',
            4 => '4. Medidas para Minimizar el Riesgo'
        ];

        if (!isset($areas[$step])) {
            return $this->redirectToRoute('app_public_results');
        }

        $areaName = $areas[$step];
        $indicators = $this->em->getRepository(ComplianceIndicator::class)->findBy(
            ['area' => $areaName],
            ['orderNumber' => 'ASC']
        );

        if ($request->isMethod('POST')) {
            $data = $session->getTemporaryData() ?? [];
            
            // Guardar las respuestas del paso actual
            $stepData = [];
            foreach ($indicators as $ind) {
                $id = $ind->getId();
                $stepData[$id] = [
                    'score' => (int)$request->request->get('score_'.$id, 0),
                    'observation' => $request->request->get('observation_'.$id),
                    'has_doc' => $request->request->get('has_doc_'.$id) === '1',
                    'doc_location' => $request->request->get('doc_location_'.$id),
                    'verified_doc' => $request->request->get('verified_doc_'.$id),
                ];
            }
            $data['step_'.$step] = $stepData;
            $session->setTemporaryData($data);
            $session->setCurrentStep($step + 1);
            $this->em->flush();

            if ($step >= 4) {
                return $this->processSurveyResults($session);
            }

            return $this->redirectToRoute('app_public_wizard', ['step' => $step + 1]);
        }

        return $this->render('public/wizard.html.twig', [
            'step' => $step,
            'areaName' => $areaName,
            'indicators' => $indicators,
            'session' => $session
        ]);
    }

    private function processSurveyResults(SurveySession $session): Response
    {
        // 1. Crear la evaluación
        $evaluation = new ComplianceEvaluation();
        $evaluation->setSurveySession($session);
        // TODO: Enlazar organization si aplica
        $this->em->persist($evaluation);

        $tempData = $session->getTemporaryData();
        $totalScore = 0;
        $totalMax = 0;
        
        $resultsByArea = [];

        // 2. Crear las respuestas y calcular
        for ($s = 1; $s <= 4; $s++) {
            $stepData = $tempData['step_'.$s] ?? [];
            $areaScore = 0;
            $areaMax = count($stepData) * 10;
            $totalMax += $areaMax;

            foreach ($stepData as $indicatorId => $ansData) {
                $indicator = $this->em->getRepository(ComplianceIndicator::class)->find($indicatorId);
                if (!$indicator) continue;

                $ans = new ComplianceAnswer();
                $ans->setEvaluation($evaluation);
                $ans->setIndicator($indicator);
                $ans->setScore($ansData['score']);
                $ans->setObservation($ansData['observation'] ?? null);
                
                if (isset($ansData['has_doc'])) {
                    $ans->setHasDocumentation($ansData['has_doc']);
                    if ($ansData['has_doc']) {
                        $ans->setDocumentationLocation($ansData['doc_location'] ?? null);
                        $ans->setVerifiedDocument($ansData['verified_doc'] ?? null);
                    }
                }

                $this->em->persist($ans);

                $areaScore += $ansData['score'];
            }
            
            $resultsByArea[$s] = [
                'score' => $areaScore,
                'max' => $areaMax,
                'percentage' => $areaMax > 0 ? ($areaScore / $areaMax) * 100 : 0
            ];
            $totalScore += $areaScore;
        }

        $evaluation->setTotalScore($totalScore);
        $evaluation->setStatus('completed');
        $session->setIsCompleted(true);

        // Guardamos los resultados por área en el temporary data para mostrarlos fácil
        $tempData['results'] = $resultsByArea;
        $tempData['global_percentage'] = $totalMax > 0 ? ($totalScore / $totalMax) * 100 : 0;
        $session->setTemporaryData($tempData);

        $this->em->flush();

        return $this->redirectToRoute('app_public_results');
    }

    #[Route('/survey/results', name: 'app_public_results')]
    public function results(Request $request): Response
    {
        $token = $request->getSession()->get('survey_token');
        if (!$token) return $this->redirectToRoute('app_public_welcome');

        $session = $this->em->getRepository(SurveySession::class)->findOneBy(['sessionToken' => $token]);
        
        return $this->render('public/results.html.twig', [
            'session' => $session
        ]);
    }

    #[Route('/survey/challenges', name: 'app_public_challenges')]
    public function challenges(Request $request): Response
    {
        $token = $request->getSession()->get('survey_token');
        if (!$token) return $this->redirectToRoute('app_public_welcome');

        $session = $this->em->getRepository(SurveySession::class)->findOneBy(['sessionToken' => $token]);
        if (!$session) return $this->redirectToRoute('app_public_welcome');

        $evaluation = $this->em->getRepository(ComplianceEvaluation::class)->findOneBy(['surveySession' => $session]);
        
        // Encontrar indicadores críticos (score <= 5)
        $criticalAnswers = $this->em->getRepository(ComplianceAnswer::class)->createQueryBuilder('a')
            ->where('a.evaluation = :eval')
            ->andWhere('a.score <= 5')
            ->setParameter('eval', $evaluation)
            ->getQuery()
            ->getResult();

        if ($request->isMethod('POST')) {
            foreach ($criticalAnswers as $ans) {
                $indId = $ans->getIndicator()->getId();
                
                $plan = new ImprovementPlan();
                $plan->setSurveySession($session);
                $plan->setIndicator($ans->getIndicator());
                $plan->setIdentifiedRisk($ans->getObservation() ?? 'Riesgo identificado por bajo puntaje');
                
                $plan->setActionPlan($request->request->get('action_'.$indId));
                $plan->setTimeframe($request->request->get('time_'.$indId));
                $plan->setResponsible($request->request->get('resp_'.$indId));

                $this->em->persist($plan);
            }
            $this->em->flush();

            // Despachar el worker si hubiera mensajería...
            
            $token = $request->getSession()->get('survey_token');
            return $this->redirectToRoute('app_public_success', ['token' => $token]);
        }

        return $this->render('public/challenges.html.twig', [
            'answers' => $criticalAnswers,
            'token' => $token
        ]);
    }

    #[Route('/survey/success', name: 'app_public_success')]
    public function success(Request $request): Response
    {
        $token = $request->query->get('token');
        $request->getSession()->remove('survey_token');
        $request->getSession()->remove('temp_selected_tool');

        return $this->render('public/success.html.twig', [
            'token' => $token
        ]);
    }
}
