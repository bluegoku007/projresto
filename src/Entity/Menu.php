<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MenuRepository::class)
 */
class Menu
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
    private $libelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_restaurant;

    /**
     * @ORM\ManyToOne(targetEntity=Restaurant::class, inversedBy="Menu")
     */
    private $restaurant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getlibelle(): ?string
    {
        return $this->libelle;
    }

    public function setlibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getIdRestaurant(): ?int
    {
        return $this->id_restaurant;
    }

    public function setIdRestaurant(int $id_restaurant): self
    {
        $this->id_restaurant = $id_restaurant;

        return $this;
    }

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): self
    {
        $this->restaurant = $restaurant;

        return $this;
    }
}
