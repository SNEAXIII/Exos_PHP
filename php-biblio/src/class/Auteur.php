<?php
require_once "Livre.php";

class Auteur
{
    private string $nom;
    private string $prenom;
    /*
     * @Livre[]
     */
    private array $livres;

    public function __construct(
        string $nom,
        string $prenom,
        array  $livres = []
    )
    {
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> livres = [];
        $this -> ajouteLivres($livres);
    }

    public function __toString()
    {
        $chaine = "";
        foreach ($this -> livres as $livre) {
            $chaine .= $livre -> getTitre() . ", ";
        }
        if ($chaine) {
            $chaine = "a écrit ".$this->nombreLivres()." livres, " . $chaine;
        } else {
            $chaine = "n'a rien écrit";
        }
        return "$this->prenom $this->nom $chaine";
    }

    public function getNomPrenom(): string
    {
        return "$this->prenom $this->nom";
    }

    public function ajouteLivres(array $livres): void
    {
        foreach ($livres as $livre) {
            $ajouter = true;
            foreach ($this -> livres as $livreEnregistre) {
                if ($livreEnregistre -> getIsbn() == $livre -> getIsbn()) {
                    $ajouter = false;
                    break;
                }
            }
            if ($ajouter) {
                $this -> livres[] = $livre;
                $livre -> ajouterAuteur($this);
            }
        }
    }

    public function ajouteLivre(Livre $livre): void
    {
        $this -> ajouteLivres([$livre]);
    }

    public function nombreLivres(): int
    {
        return count($this -> livres);
    }

}
