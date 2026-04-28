<?php

namespace App\Modules\Mailing;

use App\Modules\Survey\SurveySession;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class EmailDelivery
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $recipientEmail = null;

    #[ORM\ManyToOne(targetEntity: SurveySession::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?SurveySession $surveySession = null;

    #[ORM\Column(length: 50)]
    private ?string $status = 'pending';

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $sentAt = null;

    // Getters and setters
    public function getId(): ?int { return $this->id; }
    public function getRecipientEmail(): ?string { return $this->recipientEmail; }
    public function setRecipientEmail(string $email): static { $this->recipientEmail = $email; return $this; }
    public function getSurveySession(): ?SurveySession { return $this->surveySession; }
    public function setSurveySession(SurveySession $session): static { $this->surveySession = $session; return $this; }
    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }
    public function getSentAt(): ?\DateTimeImmutable { return $this->sentAt; }
    public function setSentAt(?\DateTimeImmutable $date): static { $this->sentAt = $date; return $this; }
}
