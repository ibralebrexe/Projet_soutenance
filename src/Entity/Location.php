<?php

namespace App\Entity;

use App\Repository\LocationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LocationRepository::class)
 */
class Location
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=50)
     */
    private $ville;


    /**
     * @ORM\Column(type="string", length=40)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $continent;

    /**
     * @ORM\OneToOne(targetEntity=Activity::class, mappedBy="localisation", cascade={"persist", "remove"})
     */
    private $activity;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

   
    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getContinent(): ?string
    {
        return $this->continent;
    }

    public function setContinent(string $continent): self
    {
        $this->continent = $continent;

        return $this;
    }

    public function getActivity(): ?Activity
    {
        return $this->activity;
    }

    public function setActivity(Activity $activity): self
    {
        // set the owning side of the relation if necessary
        if ($activity->getLocalisation() !== $this) {
            $activity->setLocalisation($this);
        }

        $this->activity = $activity;

        return $this;
    }
}
