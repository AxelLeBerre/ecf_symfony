<?php

namespace App\Entity;
use App\Entity\User;
use App\Entity\Book;

use App\Repository\BookLoanRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookLoanRepository::class)]
class BookLoan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Book::class, inversedBy: 'bookLoans')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Book $book = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'loans')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;


    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_emprunt = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_retour_prevue = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_retour_reelle = null;

    #[ORM\Column(nullable: true)]
    private ?bool $extension_utilisee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }

    public function setBook(?Book $book): self
    {
        $this->book = $book;

        return $this;
    }

    public function getDateEmprunt(): ?\DateTimeInterface
    {
        return $this->date_emprunt;
    }

    public function setDateEmprunt(?\DateTimeInterface $date_emprunt): self
    {
        $this->date_emprunt = $date_emprunt;

        return $this;
    }

    public function getDateRetourPrevue(): ?\DateTimeInterface
    {
        return $this->date_retour_prevue;
    }

    public function setDateRetourPrevue(?\DateTimeInterface $date_retour_prevue): self
    {
        $this->date_retour_prevue = $date_retour_prevue;

        return $this;
    }

    public function getDateRetourReelle(): ?\DateTimeInterface
    {
        return $this->date_retour_reelle;
    }

    public function setDateRetourReelle(?\DateTimeInterface $date_retour_reelle): self
    {
        $this->date_retour_reelle = $date_retour_reelle;

        return $this;
    }

    public function isExtensionUtilisee(): ?bool
    {
        return $this->extension_utilisee;
    }

    public function setExtensionUtilisee(?bool $extension_utilisee): self
    {
        $this->extension_utilisee = $extension_utilisee;

        return $this;
    }
}
