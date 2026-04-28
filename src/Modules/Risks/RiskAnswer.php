<?php

namespace App\Modules\Risks;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'risk_answers')]
class RiskAnswer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: RiskEvaluation::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?RiskEvaluation $evaluation = null;

    #[ORM\ManyToOne(targetEntity: RiskIndicator::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?RiskIndicator $indicator = null;

    #[ORM\Column(type: 'smallint')]
    private ?int $severity = null;

    #[ORM\Column(type: 'smallint', nullable: true)]
    private ?int $probability = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $observation = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
