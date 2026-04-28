<?php

namespace App\Modules\Risks;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/risks')]
class RiskController extends AbstractController
{
    #[Route('/', name: 'app_risks_index')]
    public function index(): Response
    {
        $evaluations = [
            ['id' => 1, 'organization' => 'Maderera Demo S.A.', 'date' => '2026-04-15', 'status' => 'evaluated', 'riskLevel' => 'Alto'],
        ];

        return $this->render('Modules/Risks/index.html.twig', [
            'evaluations' => $evaluations,
        ]);
    }
}
