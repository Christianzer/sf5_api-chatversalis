<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MessagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=MessagesRepository::class)
 */
class Messages
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $messages;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datemessage;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datemodification;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datesupression;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $piecesjointes;

    /**
     * @ORM\ManyToOne(targetEntity=Participants::class, inversedBy="messages")
     */
    private $participantId;

    /**
     * @ORM\Column(type="integer")
     */
    private $groupeId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessages(): ?string
    {
        return $this->messages;
    }

    public function setMessages(?string $messages): self
    {
        $this->messages = $messages;

        return $this;
    }

    public function getDatemessage(): ?\DateTimeInterface
    {
        return $this->datemessage;
    }

    public function setDatemessage(\DateTimeInterface $datemessage): self
    {
        $this->datemessage = $datemessage;

        return $this;
    }

    public function getDatemodification(): ?\DateTimeInterface
    {
        return $this->datemodification;
    }

    public function setDatemodification(\DateTimeInterface $datemodification): self
    {
        $this->datemodification = $datemodification;

        return $this;
    }

    public function getDatesupression(): ?\DateTimeInterface
    {
        return $this->datesupression;
    }

    public function setDatesupression(\DateTimeInterface $datesupression): self
    {
        $this->datesupression = $datesupression;

        return $this;
    }

    public function getPiecesjointes(): ?string
    {
        return $this->piecesjointes;
    }

    public function setPiecesjointes(?string $piecesjointes): self
    {
        $this->piecesjointes = $piecesjointes;

        return $this;
    }

    public function getParticipantId(): ?Participants
    {
        return $this->participantId;
    }

    public function setParticipantId(?Participants $participantId): self
    {
        $this->participantId = $participantId;

        return $this;
    }

    public function getGroupeId(): ?int
    {
        return $this->groupeId;
    }

    public function setGroupeId(int $groupeId): self
    {
        $this->groupeId = $groupeId;

        return $this;
    }
}
