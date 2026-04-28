<?php

namespace App\Modules\Compliance;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'compliance_answers')]
class ComplianceAnswer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: ComplianceEvaluation::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?ComplianceEvaluation $evaluation = null;

    #[ORM\ManyToOne(targetEntity: ComplianceIndicator::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?ComplianceIndicator $indicator = null;

    #[ORM\Column(type: 'smallint')]
    private ?int $score = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $observation = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $verificationDocument = null;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private ?bool $hasDocumentation = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $documentationLocation = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $verifiedDocument = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvaluation(): ?ComplianceEvaluation { return $this->evaluation; }
    public function setEvaluation(?ComplianceEvaluation $evaluation): static { $this->evaluation = $evaluation; return $this; }
    
    public function getIndicator(): ?ComplianceIndicator { return $this->indicator; }
    public function setIndicator(?ComplianceIndicator $indicator): static { $this->indicator = $indicator; return $this; }

    public function getScore(): ?int { return $this->score; }
    public function setScore(?int $score): static { $this->score = $score; return $this; }

    public function getObservation(): ?string { return $this->observation; }
    public function setObservation(?string $observation): static { $this->observation = $observation; return $this; }

    public function getVerificationDocument(): ?string { return $this->verificationDocument; }
    public function setVerificationDocument(?string $doc): static { $this->verificationDocument = $doc; return $this; }

    public function getHasDocumentation(): ?bool
    {
        return $this->hasDocumentation;
    }

    public function setHasDocumentation(?bool $hasDocumentation): self
    {
        $this->hasDocumentation = $hasDocumentation;
        return $this;
    }

    public function getDocumentationLocation(): ?string
    {
        return $this->documentationLocation;
    }

    public function setDocumentationLocation(?string $documentationLocation): self
    {
        $this->documentationLocation = $documentationLocation;
        return $this;
    }

    public function getVerifiedDocument(): ?string
    {
        return $this->verifiedDocument;
    }

    public function setVerifiedDocument(?string $verifiedDocument): self
    {
        $this->verifiedDocument = $verifiedDocument;
        return $this;
    }
}
