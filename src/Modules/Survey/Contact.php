<?php

namespace App\Modules\Survey;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255)]
    private ?string $companyName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commercialName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $legalRepresentative = null;

    #[ORM\Column(nullable: true)]
    private ?int $foundationYear = null;

    #[ORM\Column(nullable: true)]
    private ?int $partnersCount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mainActivity = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mainProduct = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $otherProducts = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $certifications = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $mainClients = null;

    #[ORM\OneToOne(targetEntity: SurveySession::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?SurveySession $surveySession = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    
    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): static { $this->email = $email; return $this; }
    
    public function getPhone(): ?string { return $this->phone; }
    public function setPhone(?string $phone): static { $this->phone = $phone; return $this; }

    public function getCompanyName(): ?string { return $this->companyName; }
    public function setCompanyName(string $companyName): static { $this->companyName = $companyName; return $this; }

    public function getCommercialName(): ?string { return $this->commercialName; }
    public function setCommercialName(?string $commercialName): static { $this->commercialName = $commercialName; return $this; }

    public function getLegalRepresentative(): ?string { return $this->legalRepresentative; }
    public function setLegalRepresentative(?string $legalRepresentative): static { $this->legalRepresentative = $legalRepresentative; return $this; }

    public function getFoundationYear(): ?int { return $this->foundationYear; }
    public function setFoundationYear(?int $foundationYear): static { $this->foundationYear = $foundationYear; return $this; }

    public function getPartnersCount(): ?int { return $this->partnersCount; }
    public function setPartnersCount(?int $partnersCount): static { $this->partnersCount = $partnersCount; return $this; }

    public function getMainActivity(): ?string { return $this->mainActivity; }
    public function setMainActivity(?string $mainActivity): static { $this->mainActivity = $mainActivity; return $this; }

    public function getMainProduct(): ?string { return $this->mainProduct; }
    public function setMainProduct(?string $mainProduct): static { $this->mainProduct = $mainProduct; return $this; }

    public function getOtherProducts(): ?string { return $this->otherProducts; }
    public function setOtherProducts(?string $otherProducts): static { $this->otherProducts = $otherProducts; return $this; }

    public function getCertifications(): ?string { return $this->certifications; }
    public function setCertifications(?string $certifications): static { $this->certifications = $certifications; return $this; }

    public function getMainClients(): ?string { return $this->mainClients; }
    public function setMainClients(?string $mainClients): static { $this->mainClients = $mainClients; return $this; }

    public function getSurveySession(): ?SurveySession { return $this->surveySession; }
    public function setSurveySession(SurveySession $session): static { $this->surveySession = $session; return $this; }
}
