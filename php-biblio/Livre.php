<?php
require_once "Auteur.php";
class Livre
{
    private string $isbn;
    private string $titre;
    private int $nbPages;
    private DateTime $dateParution;
    private Auteur $auteur;

    public function __construct(
        string $isbn,
        string $titre,
        int $nbPages,
        DateTime $dateParution
    ) {
        $this->isbn = $isbn;
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->dateParution = $dateParution;
    }

    public function ajouterAuteur(Auteur $auteur): void
    {
        $this->auteur = $auteur;
    }
}
