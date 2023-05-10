<?php
require_once "../class/main.php";

class Formation
{
    private string $intitule;
    private int $nombrePlace;
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private array $inscription;

    /**
     * @param string $intitule
     * @param int $nombrePlace
     * @param DateTime $dateDebut
     * @param DateTime $dateFin
     */
    public function __construct(string $intitule, int $nombrePlace, DateTime $dateDebut, DateTime $dateFin)
    {
        $this -> intitule = $intitule;
        $this -> nombrePlace = $nombrePlace;
        $this -> dateDebut = $dateDebut;
        $this -> dateFin = $dateFin;
        $this -> inscription = [];
    }

    /**
     * @return string
     */
    public function getIntitule(): string
    {
        return $this -> intitule;
    }

    /**
     * @return int
     */
    public function getNombrePlace(): int
    {
        return $this -> nombrePlace;
    }

    /**
     * @return DateTime
     */
    public function getDateDebut(): DateTime
    {
        return $this -> dateDebut;
    }

    /**
     * @return DateTime
     */
    public function getDateFin(): DateTime
    {
        return $this -> dateFin;
    }

    /**
     * @return array
     */
    public function getInscription(): array
    {
        return $this -> inscription;
    }


}