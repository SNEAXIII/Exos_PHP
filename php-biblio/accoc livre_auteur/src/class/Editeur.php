<?php
require_once "main.php";
class Editeur
{
    private string $nom;
    private string $ville;

    /**
     * @param string $nom
     * @param string $ville
     */
    public function __construct(string $nom, string $ville)
    {
        $this -> nom = $nom;
        $this -> ville = $ville;
    }


}