<?php
class Livre {
    private string $isbn;
    private string $titre;
    private DateTime $dataParution;
    private int $nombrePage;
    private Auteur $auteur;


    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this -> isbn;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn(string $isbn): void
    {
        $this -> isbn = $isbn;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this -> titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this -> titre = $titre;
    }

    /**
     * @return DateTime
     */
    public function getDataParution(): DateTime
    {
        return $this -> dataParution;
    }

    /**
     * @param DateTime $dataParution
     */
    public function setDateParution(DateTime $dataParution): void
    {
        $this -> dataParution = $dataParution;
    }

    /**
     * @return int
     */
    public function getNombrePage(): int
    {
        return $this -> nombrePage;
    }

    /**
     * @param int $nombrePage
     */
    public function setNombrePage(int $nombrePage): void
    {
        $this -> nombrePage = $nombrePage;
    }

    /**
     * @return Auteur
     */
    public function getAuteur(): Auteur
    {
        return $this -> auteur;
    }

    /**
     * @param Auteur $auteur
     */
    public function setAuteur(Auteur $auteur): void
    {
        $this -> auteur = $auteur;
    }

}