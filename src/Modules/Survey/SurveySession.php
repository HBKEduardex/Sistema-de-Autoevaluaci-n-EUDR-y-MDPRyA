<?php

namespace App\Modules\Survey;

use App\Modules\Organizations\Organization;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class SurveySession
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $sessionToken = null;

    #[ORM\Column]
    private ?int $currentStep = 1;

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $temporaryData = [];

    #[ORM\Column(type: 'boolean')]
    private bool $isCompleted = false;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $selectedTool = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(targetEntity: Organization::class)]
    private ?Organization $organization = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->sessionToken = bin2hex(random_bytes(16));
    }

    // Getters y Setters
    public function getId(): ?int { return $this->id; }
    public function getSessionToken(): ?string { return $this->sessionToken; }
    public function setSessionToken(string $token): static { $this->sessionToken = $token; return $this; }
    public function getCurrentStep(): ?int { return $this->currentStep; }
    public function setCurrentStep(int $step): static { $this->currentStep = $step; return $this; }
    public function getTemporaryData(): ?array { return $this->temporaryData; }
    public function setTemporaryData(?array $data): static { $this->temporaryData = $data; return $this; }
    public function getIsCompleted(): bool { return $this->isCompleted; }
    public function setIsCompleted(bool $completed): static { $this->isCompleted = $completed; return $this; }

    public function getSelectedTool(): ?string
    {
        return $this->selectedTool;
    }

    public function setSelectedTool(?string $selectedTool): self
    {
        $this->selectedTool = $selectedTool;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
    public function getOrganization(): ?Organization { return $this->organization; }
    public function setOrganization(?Organization $organization): static { $this->organization = $organization; return $this; }
}
