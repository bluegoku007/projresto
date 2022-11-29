<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RestaurantRepository::class)
 */
class Restaurant
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero_telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $rating;

    /**
     * @ORM\OneToMany(targetEntity=Menu::class, mappedBy="restaurant")
     */
    private $Menu;

    public function __construct()
    {
        $this->Menu = new ArrayCollection();
    }

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

    public function getPhotos(): ?string
    {
        return $this->photos;
    }

    public function setPhotos(string $photos): self
    {
        $this->photos = $photos;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getNumeroTelephone(): ?int
    {
        return $this->numero_telephone;
    }

    public function setNumeroTelephone(int $numero_telephone): self
    {
        $this->numero_telephone = $numero_telephone;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @return Collection<int, Menu>
     */
    public function getMenu(): Collection
    {
        return $this->Menu;
    }

    public function addMenu(Menu $menu): self
    {
        if (!$this->Menu->contains($menu)) {
            $this->Menu[] = $menu;
            $menu->setRestaurant($this);
        }

        return $this;
    }

    public function removeMenu(Menu $menu): self
    {
        if ($this->Menu->removeElement($menu)) {
            // set the owning side to null (unless already changed)
            if ($menu->getRestaurant() === $this) {
                $menu->setRestaurant(null);
            }
        }

        return $this;
    }
}
