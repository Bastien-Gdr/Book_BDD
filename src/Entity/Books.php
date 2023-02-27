<?php

namespace App\Entity;

use App\Repository\BooksRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BooksRepository::class)]
class Books
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Ordre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Auteur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Titre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Editeur = null;

    #[ORM\Column(nullable: true)]
    private ?bool $Poche = null;

    #[ORM\Column(nullable: true)]
    private ?int $Annee = null;

    #[ORM\Column(nullable: true)]
    private ?int $ISBN = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Distinction = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Collection = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Numero = null;

    #[ORM\Column(nullable: true)]
    private ?int $Tome = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Cycle = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Genre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $SousGenre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $NoteCath = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $NoteBruno = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Commentaires = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Nationalite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TitreOriginal = null;

    #[ORM\Column(nullable: true)]
    private ?int $Date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Emprunteur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateFin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Fiche = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $MotsClefs = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrdre(): ?int
    {
        return $this->Ordre;
    }

    public function setOrdre(?int $Ordre): self
    {
        $this->Ordre = $Ordre;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(?string $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(?string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->Editeur;
    }

    public function setEditeur(?string $Editeur): self
    {
        $this->Editeur = $Editeur;

        return $this;
    }

    public function isPoche(): ?bool
    {
        return $this->Poche;
    }

    public function setPoche(?bool $Poche): self
    {
        $this->Poche = $Poche;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->Annee;
    }

    public function setAnnee(?int $Annee): self
    {
        $this->Annee = $Annee;

        return $this;
    }

    public function getISBN(): ?int
    {
        return $this->ISBN;
    }

    public function setISBN(?int $ISBN): self
    {
        $this->ISBN = $ISBN;

        return $this;
    }

    public function getDistinction(): ?string
    {
        return $this->Distinction;
    }

    public function setDistinction(?string $Distinction): self
    {
        $this->Distinction = $Distinction;

        return $this;
    }

    public function getCollection(): ?string
    {
        return $this->Collection;
    }

    public function setCollection(?string $Collection): self
    {
        $this->Collection = $Collection;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->Numero;
    }

    public function setNumero(?string $Numero): self
    {
        $this->Numero = $Numero;

        return $this;
    }

    public function getTome(): ?int
    {
        return $this->Tome;
    }

    public function setTome(?int $Tome): self
    {
        $this->Tome = $Tome;

        return $this;
    }

    public function getCycle(): ?string
    {
        return $this->Cycle;
    }

    public function setCycle(?string $Cycle): self
    {
        $this->Cycle = $Cycle;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->Genre;
    }

    public function setGenre(?string $Genre): self
    {
        $this->Genre = $Genre;

        return $this;
    }

    public function getSousGenre(): ?string
    {
        return $this->SousGenre;
    }

    public function setSousGenre(?string $SousGenre): self
    {
        $this->SousGenre = $SousGenre;

        return $this;
    }

    public function getNoteCath(): ?string
    {
        return $this->NoteCath;
    }

    public function setNoteCath(?string $NoteCath): self
    {
        $this->NoteCath = $NoteCath;

        return $this;
    }

    public function getNoteBruno(): ?string
    {
        return $this->NoteBruno;
    }

    public function setNoteBruno(?string $NoteBruno): self
    {
        $this->NoteBruno = $NoteBruno;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->Commentaires;
    }

    public function setCommentaires(?string $Commentaires): self
    {
        $this->Commentaires = $Commentaires;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->Nationalite;
    }

    public function setNationalite(?string $Nationalite): self
    {
        $this->Nationalite = $Nationalite;

        return $this;
    }

    public function getTitreOriginal(): ?string
    {
        return $this->TitreOriginal;
    }

    public function setTitreOriginal(?string $TitreOriginal): self
    {
        $this->TitreOriginal = $TitreOriginal;

        return $this;
    }

    public function getDate(): ?int
    {
        return $this->Date;
    }

    public function setDate(?int $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getEmprunteur(): ?string
    {
        return $this->Emprunteur;
    }

    public function setEmprunteur(?string $Emprunteur): self
    {
        $this->Emprunteur = $Emprunteur;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->DateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $DateDebut): self
    {
        $this->DateDebut = $DateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->DateFin;
    }

    public function setDateFin(?\DateTimeInterface $DateFin): self
    {
        $this->DateFin = $DateFin;

        return $this;
    }

    public function getFiche(): ?string
    {
        return $this->Fiche;
    }

    public function setFiche(?string $Fiche): self
    {
        $this->Fiche = $Fiche;

        return $this;
    }

    public function getMotsClefs(): ?string
    {
        return $this->MotsClefs;
    }

    public function setMotsClefs(?string $MotsClefs): self
    {
        $this->MotsClefs = $MotsClefs;

        return $this;
    }
}
