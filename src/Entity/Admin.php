<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 * @ORM\Table(name="`admin`")
 */
class Admin
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mot_de_passe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->mot_de_passe;
    }

    public function setMotDePasse(string $mot_de_passe): self
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }
}
