<?php
require_once "../class/main.php";

class Inscription
{
    private int $note;
    private string $appreciation;
    private Salarie $salarie;

    /**
     * @param int $note
     * @param string $appreciation
     * @param Salarie $salarie
     */


    public function __construct(Salarie $salarie)
    {
        $this -> salarie = $salarie;
    }

    public function __toString(): string
    {
        $prenom = $this->salarie->getPrenom();
        $nom = $this->salarie->getNom();
        $note = $this->note;
        $appreciation = $this->appreciation;
        return "$prenom $nom a obtenu la note $note et l'appréciation \"$appreciation\"";
    }

    /**
     * @return int
     */
    public function getNote(): int
    {
        return $this -> note;
    }

    /**
     * @return Salarie
     */
    public function getSalarie(): Salarie
    {
        return $this -> salarie;
    }

    /**
     * @param Salarie $salarie
     */
    public function setSalarie(Salarie $salarie): void
    {
        $this -> salarie = $salarie;
    }

    /**
     * @param int $note
     */
    public function setNote(int $note): void
    {
        $this -> note = $note;
    }

    /**
     * @param string $appreciation
     */
    public function setAppreciation(string $appreciation): void
    {
        $this -> appreciation = $appreciation;
    }

    /**
     * @return string
     */
    public function getAppreciation(): string
    {
        return $this -> appreciation;
    }
}