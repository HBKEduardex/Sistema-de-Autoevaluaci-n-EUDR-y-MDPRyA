<?php

namespace App\Modules\Compliance;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/compliance')]
class ComplianceController extends AbstractController
{
    #[Route('/', name: 'app_compliance_index')]
    public function index(): Response
    {
        // En una app real, aquí se consultaría Doctrine: $em->getRepository(ComplianceEvaluation::class)->findAll();
        $evaluations = [
            ['id' => 1, 'organization' => 'Maderera Demo S.A.', 'date' => '2026-04-10', 'status' => 'draft', 'score' => null],
            ['id' => 2, 'organization' => 'Exportadora Andes', 'date' => '2026-04-12', 'status' => 'evaluated', 'score' => 85.5],
        ];

        return $this->render('Modules/Compliance/index.html.twig', [
            'evaluations' => $evaluations,
        ]);
    }

    #[Route('/evaluate/{id}', name: 'app_compliance_evaluate')]
    public function evaluate(int $id): Response
    {
        // Datos mockeados de la evaluación (en real vienen de DB)
        $evaluation = [
            'id' => $id,
            'organization' => 'Maderera Demo S.A.',
            'status' => 'draft'
        ];

        // Indicadores mockeados divididos por área
        $areas = [
            'Legalidad' => [
                ['id' => 101, 'name' => 'Derechos de uso de la tierra', 'desc' => 'Verificar títulos de propiedad y concesiones forestales.', 'critical' => true],
                ['id' => 102, 'name' => 'Pagos de impuestos', 'desc' => 'Certificados de no adeudo tributario.', 'critical' => false],
            ],
            'Trazabilidad' => [
                ['id' => 201, 'name' => 'Identificación de origen', 'desc' => 'Coordenadas geolocalizadas de la parcela.', 'critical' => true],
            ]
        ];

        return $this->render('Modules/Compliance/evaluate.html.twig', [
            'evaluation' => $evaluation,
            'areas' => $areas,
        ]);
    }
}
