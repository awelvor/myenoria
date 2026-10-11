<?php

namespace App\Entity;

use App\Repository\PersonnesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonnesRepository::class)]
class Personnes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $autresPrenom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nomJeuneFille = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $particuleNom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nomDeNaissance = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateNaissance = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $lieuNaissance = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAutresPrenom(): ?string
    {
        return $this->autresPrenom;
    }

    public function setAutresPrenom(?string $autresPrenom): static
    {
        $this->autresPrenom = $autresPrenom;

        return $this;
    }

    public function getNomJeuneFille(): ?string
    {
        return $this->nomJeuneFille;
    }

    public function setNomJeuneFille(?string $nomJeuneFille): static
    {
        $this->nomJeuneFille = $nomJeuneFille;

        return $this;
    }

    public function getParticuleNom(): ?string
    {
        return $this->particuleNom;
    }

    public function setParticuleNom(?string $particuleNom): static
    {
        $this->particuleNom = $particuleNom;

        return $this;
    }

    public function getNomDeNaissance(): ?string
    {
        return $this->nomDeNaissance;
    }

    public function setNomDeNaissance(?string $nomDeNaissance): static
    {
        $this->nomDeNaissance = $nomDeNaissance;

        return $this;
    }

    public function getDateNaissance(): ?\DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTime $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieuNaissance;
    }

    public function setLieuNaissance(?string $lieuNaissance): static
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }
}
