<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 *
 * @ORM\Table(name="activity", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_AC74095AC68BE09C", columns={"localisation_id"})})
 * @ORM\Entity
 */
class Activity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=25, nullable=false)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="temps_de_visite", type="smallint", nullable=true)
     */
    private $tempsDeVisite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_postal", type="string", length=5, nullable=true)
     */
    private $codePostal;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localisation_id", referencedColumnName="id")
     * })
     */
    private $localisation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTempsDeVisite(): ?int
    {
        return $this->tempsDeVisite;
    }

    public function setTempsDeVisite(?int $tempsDeVisite): self
    {
        $this->tempsDeVisite = $tempsDeVisite;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getLocalisation(): ?Ville
    {
        return $this->localisation;
    }

    public function setLocalisation(?Ville $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }


}
