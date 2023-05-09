<?php
require_once "main.php";

class Livre
{
    private string $isbn;
    private string $titre;
    private int $nbPages;
    private DateTime $dateParution;
    private ?Auteur $auteur;

    public function __construct(
        string $isbn,
        string $titre,
        int    $nbPages,
        string $dateParution,
        ?Auteur $auteur = null
    )
    {
        $this -> isbn = $isbn;
        $this -> titre = $titre;
        $this -> nbPages = $nbPages;
        $this -> dateParution = DateTime ::createFromFormat("d/m/Y", $dateParution) -> setTime(0, 0);
        $this -> auteur = $auteur;
    }

    public function __toString(): string
    {
        return $this->getAuteur()->getNom()." ".$this->getAuteur()->getPrenom()." a écrit le livre \"".$this->getTitre()."\"";
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this -> isbn;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this -> titre;
    }

    /**
     * @return int
     */
    public function getNbPages(): int
    {
        return $this -> nbPages;
    }

    /**
     * @return DateTime|false
     */
    public function getDateParution(): DateTime|bool
    {
        return $this -> dateParution;
    }

    /**
     * @return Auteur|null
     */
    public function getAuteur(): ?Auteur
    {
        return $this -> auteur ;
    }

    /**
     * @param Auteur|null $auteur
     */
    public function setAuteur(?Auteur $auteur): void
    {
        $this -> auteur = $auteur;
    }

}