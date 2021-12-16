<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MembresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=MembresRepository::class)
 */
class Membres
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Group::class, inversedBy="membres")
     */
    private $groupeId;

    /**
     * @ORM\ManyToOne(targetEntity=Participants::class, inversedBy="membres")
     */
    private $participantId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupeId(): ?Group
    {
        return $this->groupeId;
    }

    public function setGroupeId(?Group $groupeId): self
    {
        $this->groupeId = $groupeId;

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
}
