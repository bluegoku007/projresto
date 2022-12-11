<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
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
    private $nom_client;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity=Restaurant::class, mappedBy="nom_resto")
     */
    private $resto;

    public function __construct()
    {
        $this->resto = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClient(): ?string
    {
        return $this->nom_client;
    }

    public function setNomClient(string $nom_client): self
    {
        $this->nom_client = $nom_client;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection<int, Restaurant>
     */
    public function getResto(): Collection
    {
        return $this->resto;
    }

    public function addResto(Restaurant $resto): self
    {
        if (!$this->resto->contains($resto)) {
            $this->resto[] = $resto;
            $resto->setNomResto($this);
        }

        return $this;
    }

    public function removeResto(Restaurant $resto): self
    {
        if ($this->resto->removeElement($resto)) {
            // set the owning side to null (unless already changed)
            if ($resto->getNomResto() === $this) {
                $resto->setNomResto(null);
            }
        }

        return $this;
    }


}
