<?php
require_once "Auteur.php";

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
        Auteur $auteur = null
    )
    {
        $this -> isbn = $isbn;
        $this -> titre = $titre;
        $this -> nbPages = $nbPages;
        $this -> dateParution = DateTime ::createFromFormat("d/m/Y", $dateParution) -> setTime(0, 0);
        $auteur ?-> ajouteLivre($this);
    }

    public function __toString()
    {
        return isset($this -> auteur) ? "L'auteur de $this->titre est " . $this -> auteur -> getNomPrenom() : "L'auteur n'est pas définit";
    }

    public function getTitre(): string
    {
        return $this -> titre;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this -> isbn;
    }

    public function ajouterAuteur(Auteur $auteur): void
    {
        $this -> auteur = $auteur;
    }
}