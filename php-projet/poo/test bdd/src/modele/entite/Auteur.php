<?php

class Auteur
{
    private string $nom;
    private string $prenom;
    private int $id;

    public function __toString(): string
    {
        return "$this->prenom $this->nom";
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this -> nom = $nom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this -> prenom = $prenom;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this -> id = $id;
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
     * @return int
     */
    public function getId(): int
    {
        return $this -> id;
    }


}