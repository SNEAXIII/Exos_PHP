<?php
class Evenement {
    private string $nom;
    private DateTime $date;

    public function __construct(string $nom, string $date)
    {
        $this->nom = $nom;
        $this->date = DateTime::createFromFormat("d/m/Y",$date);
    }

    public function getNom() : string
    {
        return $this->nom;
    }
    public function getDate() : string
    {
        return $this->date->format("d/m/Y");
    }
    private function intervalleAvecAujourdhui() : DateInterval
    {
        return $this->date ->diff(new DateTime());
    }
    public function getNbJours() : int
    {
        return $this->intervalleAvecAujourdhui()->days;
    }
    public function getCompteARebours() : string
    {
        return $this->intervalleAvecAujourdhui()->format("");
    }
}

$noel2023 = new Evenement("Noel 2023", "25/12/2023");
echo $noel2023->getNom() . PHP_EOL ;
echo $noel2023->getDate() . PHP_EOL ;
echo $noel2023->getNom() . " aura lieu dans " . $noel2023->getNbJours() . " jours" . PHP_EOL ;
echo $noel2023->getNom() . " aura lieu dans " . $noel2023->getCompteARebours() . PHP_EOL;