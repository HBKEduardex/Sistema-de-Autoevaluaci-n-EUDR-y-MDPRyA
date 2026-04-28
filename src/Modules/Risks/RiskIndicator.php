<?php

namespace App\Modules\Risks;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'risk_indicators')]
class RiskIndicator
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $area = null;

    #[ORM\Column(length: 255)]
    private ?string $riskFactorName = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: 'float')]
    private ?float $weight = 1.0;

    public function getId(): ?int
    {
        return $this->id;
    }
}
