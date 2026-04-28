<?php

namespace App\Modules\Compliance;

use App\Modules\Survey\SurveySession;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'improvement_plans')]
class ImprovementPlan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: SurveySession::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?SurveySession $surveySession = null;

    #[ORM\ManyToOne(targetEntity: ComplianceIndicator::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?ComplianceIndicator $indicator = null;

    #[ORM\Column(type: 'text')]
    private ?string $identifiedRisk = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $timeframe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $responsible = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $actionPlan = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int { return $this->id; }
    
    public function getSurveySession(): ?SurveySession { return $this->surveySession; }
    public function setSurveySession(?SurveySession $session): static { $this->surveySession = $session; return $this; }
    
    public function getIndicator(): ?ComplianceIndicator { return $this->indicator; }
    public function setIndicator(?ComplianceIndicator $indicator): static { $this->indicator = $indicator; return $this; }

    public function getIdentifiedRisk(): ?string { return $this->identifiedRisk; }
    public function setIdentifiedRisk(string $risk): static { $this->identifiedRisk = $risk; return $this; }

    public function getTimeframe(): ?string { return $this->timeframe; }
    public function setTimeframe(?string $timeframe): static { $this->timeframe = $timeframe; return $this; }

    public function getResponsible(): ?string { return $this->responsible; }
    public function setResponsible(?string $responsible): static { $this->responsible = $responsible; return $this; }

    public function getActionPlan(): ?string { return $this->actionPlan; }
    public function setActionPlan(?string $actionPlan): static { $this->actionPlan = $actionPlan; return $this; }
}
