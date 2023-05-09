<?php
require_once "main.php";

class Categorie
{
    private string $categorie;

    /**
     * @param string $categorie
     */
    public function __construct(string $categorie)
    {
        $this -> categorie = $categorie;
    }

}