<?php

namespace App\Modules\Compliance;

use App\Modules\Organizations\Organization;
use App\Modules\Users\User;
use App\Modules\Survey\SurveySession;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'compliance_evaluations')]
class ComplianceEvaluation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Organization::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?Organization $organization = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private ?User $evaluator = null;

    #[ORM\OneToOne(targetEntity: SurveySession::class)]
    private ?SurveySession $surveySession = null;

    #[ORM\Column(length: 50)]
    private ?string $status = 'draft';

    #[ORM\Column(nullable: true)]
    private ?float $totalScore = null;

    #[ORM\Column(type: 'datetime_immutable')]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurveySession(): ?SurveySession { return $this->surveySession; }
    public function setSurveySession(?SurveySession $session): static { $this->surveySession = $session; return $this; }
    public function getOrganization(): ?Organization { return $this->organization; }
    public function setOrganization(?Organization $organization): static { $this->organization = $organization; return $this; }
    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }
    public function getTotalScore(): ?float { return $this->totalScore; }
    public function setTotalScore(?float $score): static { $this->totalScore = $score; return $this; }
}
