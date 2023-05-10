<?php
require_once "../class/main.php";

class Entreprise
{
    private string $nom;
    private string $rue;
    private string $ville;
    private string $codePostal;

    /**
     * @param string $nom
     * @param string $rue
     * @param string $ville
     * @param string $codePostal
     */
    public function __construct(string $nom, string $rue, string $ville, string $codePostal)
    {
        $this -> nom = $nom;
        $this -> rue = $rue;
        $this -> ville = $ville;
        $this -> codePostal = $codePostal;
    }

}