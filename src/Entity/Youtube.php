<?php

namespace App\Entity;

use App\Repository\YoutubeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=YoutubeRepository::class)
 */
class Youtube
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descristion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescristion(): ?string
    {
        return $this->descristion;
    }

    public function setDescristion(?string $descristion): self
    {
        $this->descristion = $descristion;

        return $this;
    }
}
