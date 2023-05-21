<?php
require_once "../class/main.php";

class Formation
{
    private string $intitule;
    private int $nombrePlaces;
    private DateTime $dateDebut;
    private DateTime $dateFin;
    /**
     * @var Inscription[] $inscriptions
     */
    private array $inscriptions;

    /**
     * @param string $intitule
     * @param int $nombrePlace
     * @param DateTime $dateDebut
     * @param DateTime $dateFin
     */
    public function __construct(string $intitule, int $nombrePlace, DateTime $dateDebut, DateTime $dateFin)
    {
        $this -> intitule = $intitule;
        $this -> nombrePlaces = $nombrePlace;
        $this -> dateDebut = $dateDebut;
        $this -> dateFin = $dateFin;
        $this -> inscriptions = [];
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
    public function getNombrePlaces(): int
    {
        return $this -> nombrePlaces;
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
    public function getInscriptions(): array
    {
        return $this -> inscriptions;
    }

    public function inscrireSalarie(Salarie $salarie): bool
    {
        if (count($this -> inscriptions) < $this -> nombrePlaces) {
            $nouvelleInscription = new Inscription($salarie);
            if (in_array($nouvelleInscription, $this -> inscriptions)) {
                return false;
            }
            $this -> inscriptions[] = $nouvelleInscription;
            return true;
        }
        return false;
    }

    public function noterSalarie(Salarie $salarie, int $note, string $appreciation): bool
    {
        try {

            if (!($note >= 0 && $note <= 20)) {
                throw new Exception("La note doit être comprise entre 0 et 20");
            }
        } catch (Exception $e) {
            echo "La note $note est incorrecte : " . $e -> getMessage();
        }

        foreach ($this -> inscriptions as $inscription) {
            if ($inscription -> getSalarie() === $salarie) {
                $inscription -> setNote($note);
                $inscription -> setAppreciation($appreciation);
                return true;
            }
        }
        return false;
    }
}