<?php
class Emprunt{
    private int $numEmprunt;
    private DateTime $dateEmprunt;
    private DateTime $dateRetour;
    private Livre $livre;
    private Utilisateur $utilisateur;

    /**
     * @return int
     */
    public function getNumEmprunt(): int
    {
        return $this -> numEmprunt;
    }

    /**
     * @param int $numEmprunt
     */
    public function setNumEmprunt(int $numEmprunt): void
    {
        $this -> numEmprunt = $numEmprunt;
    }

    /**
     * @return DateTime
     */
    public function getDateEmprunt(): DateTime
    {
        return $this -> dateEmprunt;
    }

    /**
     * @param DateTime $dateEmprunt
     */
    public function setDateEmprunt(DateTime $dateEmprunt): void
    {
        $this -> dateEmprunt = $dateEmprunt;
    }

    /**
     * @return DateTime
     */
    public function getDateRetour(): DateTime
    {
        return $this -> dateRetour;
    }

    /**
     * @param DateTime $dateRetour
     */
    public function setDateRetour(DateTime $dateRetour): void
    {
        $this -> dateRetour = $dateRetour;
    }

    /**
     * @return Livre
     */
    public function getLivre(): Livre
    {
        return $this -> livre;
    }

    /**
     * @param Livre $livre
     */
    public function setLivre(Livre $livre): void
    {
        $this -> livre = $livre;
    }

    /**
     * @return Utilisateur
     */
    public function getUtilisateur(): Utilisateur
    {
        return $this -> utilisateur;
    }

    /**
     * @param Utilisateur $utilisateur
     */
    public function setUtilisateur(Utilisateur $utilisateur): void
    {
        $this -> utilisateur = $utilisateur;
    }

}