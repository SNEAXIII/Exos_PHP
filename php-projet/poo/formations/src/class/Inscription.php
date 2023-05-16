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

    public function __construct(int $note, string $appreciation, Salarie $salarie)
    {
        $this -> note = $note;
        $this -> appreciation = $appreciation;
        $this -> salarie = $salarie;
    }


    /**
     * @return int
     */
    public function getNote(): int
    {
        return $this -> note;
    }

    /**
     * @return string
     */
    public function getAppreciation(): string
    {
        return $this -> appreciation;
    }

    public function inscrireSalarie(Salarie $salarie): void
    {

    }
}