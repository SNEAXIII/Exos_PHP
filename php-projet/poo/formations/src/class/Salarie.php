<?php
require_once "../class/main.php";

class Salarie
{
    private string $nom;
    private string $prenom;
    private Entreprise $entreprise;

    /**
     * @param string $nom
     * @param string $prenom
     * @param Entreprise $entreprise
     */
    public function __construct(string $nom, string $prenom, Entreprise $entreprise)
    {
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> entreprise = $entreprise;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this -> nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this -> prenom;
    }

    /**
     * @return Entreprise
     */
    public function getEntreprise(): Entreprise
    {
        return $this -> entreprise;
    }


}