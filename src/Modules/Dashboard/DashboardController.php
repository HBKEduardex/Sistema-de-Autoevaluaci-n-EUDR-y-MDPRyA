<?php

namespace App\Modules\Dashboard;

use App\Modules\Compliance\ComplianceEvaluation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard')]
    public function index(EntityManagerInterface $em): Response
    {
        $evaluations = $em->getRepository(ComplianceEvaluation::class)->findAll();
        
        $totalEvaluations = count($evaluations);
        $globalScoreSum = 0;
        
        // Sum total scores
        foreach ($evaluations as $e) {
            $globalScoreSum += $e->getTotalScore();
        }

        $avgCompliance = 0;
        if ($totalEvaluations > 0) {
            // Ya que son 18 indicadores * 10 puntos = 180 máximo (o hasta 360 si son ambas)
            // Calcularemos un promedio referencial de 180 por ahora
            $maxPossible = $totalEvaluations * 180;
            $avgCompliance = ($globalScoreSum / $maxPossible) * 100;
        }

        $stats = [
            'total_evaluations' => $totalEvaluations,
            'avg_compliance' => $avgCompliance,
        ];

        // Chart Data Mockup (or calculated real data)
        $chartData = [
            'labels' => ['Capacidad Organizativa', 'Disponibilidad Info', 'Autoevaluación', 'Minimizar Riesgo'],
            'data' => [85, 70, 90, 60] // Podría calcularse dinámicamente
        ];

        return $this->render('Modules/Dashboard/index.html.twig', [
            'stats' => $stats,
            'chartData' => json_encode($chartData),
        ]);
    }
}
