<?php

namespace App\Modules\Reports;

use App\Modules\Compliance\ComplianceEvaluation;
use App\Modules\Compliance\ImprovementPlan;
use App\Modules\Survey\SurveySession;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PdfController extends AbstractController
{
    #[Route('/survey/export-pdf', name: 'app_public_export_pdf')]
    public function exportPdf(Request $request, EntityManagerInterface $em): Response
    {
        // El token podría venir en la sesión, pero es mejor permitir descargarlo justo tras completar
        // Opcional: recibir el sessionToken por query string para que admins también puedan descargarlo
        $token = $request->query->get('token') ?? $request->getSession()->get('survey_token');
        
        if (!$token) {
            return $this->redirectToRoute('app_public_welcome');
        }

        $session = $em->getRepository(SurveySession::class)->findOneBy(['sessionToken' => $token]);
        if (!$session) {
            return $this->redirectToRoute('app_public_welcome');
        }

        $evaluation = $em->getRepository(ComplianceEvaluation::class)->findOneBy(['surveySession' => $session]);
        
        // Determinar qué herramienta usar para el título
        $toolLabel = 'Evaluación de Cumplimiento EUDR';
        if ($session->getSelectedTool() === 'tool2') {
            $toolLabel = 'Gestión de Riesgos EUDR';
        } elseif ($session->getSelectedTool() === 'both') {
            $toolLabel = 'Evaluación de Cumplimiento y Gestión de Riesgos EUDR';
        }

        $contact = $em->getRepository(\App\Modules\Survey\Contact::class)->findOneBy(['surveySession' => $session]);
        $companyName = $contact ? $contact->getCompanyName() : 'No especificada';

        // Obtener ruta absoluta de logos para DomPDF
        $projectDir = $this->getParameter('kernel.project_dir');
        
        $logos = [
            'ue' => $this->imageToBase64($projectDir . '/public/images/eudr.png'),
            'gob' => $this->imageToBase64($projectDir . '/public/images/logo presidencia.png'),
            'al_invest' => $this->imageToBase64($projectDir . '/public/images/al_invest.png'),
        ];

        // Construir datos de las áreas
        $areasData = [];
        $areaNames = [
            1 => 'Capacidad Organizativa, respecto al EUDR',
            2 => 'Disponibilidad de la Información',
            3 => 'Capacidad de Autoevaluación',
            4 => 'Medidas para Minimizar el Riesgo'
        ];

        for ($i = 1; $i <= 4; $i++) {
            $areasData[$i] = [
                'name' => $areaNames[$i],
                'items' => [],
                'totalScore' => 0,
                'maxScore' => 0,
            ];
        }

        if ($evaluation) {
            $answers = $em->getRepository(\App\Modules\Compliance\ComplianceAnswer::class)->findBy(['evaluation' => $evaluation]);
            foreach ($answers as $ans) {
                $indicator = $ans->getIndicator();
                $areaString = $indicator->getArea();
                $areaId = (int) substr($areaString, 0, 1);
                if (!isset($areasData[$areaId])) continue;

                $areasData[$areaId]['items'][] = [
                    'number' => $indicator->getOrderNumber(),
                    'criterion' => '<b>' . htmlspecialchars($indicator->getCriterion() ?? '') . '</b><br>' . htmlspecialchars($indicator->getName() ?? ''),
                    'score' => $ans->getScore(),
                    'docLocation' => $ans->getDocumentationLocation(),
                    'verifiedDoc' => $ans->getVerifiedDocument(),
                    'observation' => $ans->getObservation(),
                ];
                $areasData[$areaId]['totalScore'] += $ans->getScore();
                $areasData[$areaId]['maxScore'] += 10;
            }
        }

        // Generar Gráficos con QuickChart
        foreach ($areasData as $id => &$data) {
            if (empty($data['items'])) {
                $data['chartBase64'] = null;
                continue;
            }

            $percentage = 0;
            if ($data['maxScore'] > 0) {
                $percentage = round(($data['totalScore'] / $data['maxScore']) * 100);
            }
            
            $remaining = 100 - $percentage;
            
            $color = '#dc3545'; // danger
            if ($percentage >= 90) $color = '#198754'; // success
            elseif ($percentage >= 60) $color = '#ffc107'; // warning

            $chartConfig = [
                'type' => 'doughnut',
                'data' => [
                    'labels' => ['Obtenido', 'Brecha'],
                    'datasets' => [
                        [
                            'data' => [$percentage, $remaining],
                            'backgroundColor' => [$color, '#e9ecef'],
                            'borderWidth' => 0
                        ]
                    ]
                ],
                'options' => [
                    'plugins' => [
                        'datalabels' => ['display' => false],
                        'doughnutlabel' => [
                            'labels' => [
                                ['text' => $percentage . '%', 'font' => ['size' => 40, 'weight' => 'bold']],
                                ['text' => 'Nivel', 'font' => ['size' => 20]]
                            ]
                        ]
                    ]
                ]
            ];
            
            $chartUrl = 'https://quickchart.io/chart?c=' . urlencode(json_encode($chartConfig)) . '&w=300&h=300';
            
            $chartImage = @file_get_contents($chartUrl);
            if ($chartImage) {
                $data['chartBase64'] = 'data:image/png;base64,' . base64_encode($chartImage);
            } else {
                $data['chartBase64'] = null;
            }
        }

        // Obtener Desafíos y Brechas
        $plans = $em->getRepository(ImprovementPlan::class)->findBy(['surveySession' => $session]);
        $challenges = [];
        foreach ($plans as $plan) {
            $indicator = $plan->getIndicator();
            $challenges[] = [
                'areaName' => $areaNames[$indicator->getArea()] ?? 'Área ' . $indicator->getArea(),
                'criterion' => $indicator->getCriterion(),
                'number' => $indicator->getOrderNumber(),
                'risk' => $plan->getIdentifiedRisk(),
                'timeframe' => $plan->getTimeframe() ?? 'No definido',
                'responsible' => $plan->getResponsible() ?? 'No definido',
                'action' => $plan->getActionPlan() ?? 'No definida'
            ];
        }

        // Renderizar HTML usando la nueva plantilla
        $html = $this->renderView('public/pdf_report_visual.html.twig', [
            'session' => $session,
            'companyName' => $companyName,
            'toolLabel' => $toolLabel,
            'logos' => $logos,
            'areasData' => $areasData,
            'challenges' => $challenges
        ]);

        // Configurar DomPDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        
        $pdfOutput = $dompdf->output();

        // Guardar físicamente en disco para WhatsApp/Trazabilidad
        $reportsDir = $projectDir . '/public/reports';
        if (!is_dir($reportsDir)) {
            mkdir($reportsDir, 0777, true);
        }
        
        $filename = 'reporte_eudr_' . $session->getSessionToken() . '.pdf';
        $filePath = $reportsDir . '/' . $filename;
        file_put_contents($filePath, $pdfOutput);

        // Retornar la descarga directa al usuario
        return new Response(
            $pdfOutput,
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="reporte_eudr.pdf"'
            ]
        );
    }

    private function imageToBase64(string $path): string
    {
        if (!file_exists($path)) {
            return '';
        }
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        return 'data:image/' . $type . ';base64,' . base64_encode($data);
    }
}
