<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $primary_techno = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $second_techno = null;

    #[ORM\Column(length: 1023)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrimaryTechno(): ?string
    {
        return $this->primary_techno;
    }

    public function setPrimaryTechno(string $primary_techno): self
    {
        $this->primary_techno = $primary_techno;

        return $this;
    }

    public function getSecondTechno(): ?string
    {
        return $this->second_techno;
    }

    public function setSecondTechno(?string $second_techno): self
    {
        $this->second_techno = $second_techno;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
