<?php

namespace App\Modules\Compliance;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'compliance_indicators')]
class ComplianceIndicator
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $area = null; // 1. Capacidad Organizativa, etc.

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $criterion = null; // Ej: "Garantiza la conservación de la información..."

    #[ORM\Column(type: 'text')]
    private ?string $name = null; // El texto real del indicador

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $orderNumber = null;

    #[ORM\Column]
    private bool $isCritical = false;

    public function getId(): ?int { return $this->id; }
    
    public function getArea(): ?string { return $this->area; }
    public function setArea(string $area): static { $this->area = $area; return $this; }
    
    public function getCriterion(): ?string { return $this->criterion; }
    public function setCriterion(?string $criterion): static { $this->criterion = $criterion; return $this; }
    
    public function getName(): ?string { return $this->name; }
    public function setName(string $name): static { $this->name = $name; return $this; }
    
    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $desc): static { $this->description = $desc; return $this; }
    
    public function getOrderNumber(): ?int { return $this->orderNumber; }
    public function setOrderNumber(?int $order): static { $this->orderNumber = $order; return $this; }

    public function isCritical(): bool { return $this->isCritical; }
    public function setIsCritical(bool $critical): static { $this->isCritical = $critical; return $this; }
}
