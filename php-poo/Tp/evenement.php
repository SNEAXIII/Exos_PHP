<?php
class Evenement {
    private string $nom;
    private DateTime $date;

    public function __construct(string $nom, string $date)
    {
        $this->nom = $nom;
        $this->date = DateTime::createFromFormat("d/m/Y",$date);
        $this->date->setTime(0,0);
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
        return $this->intervalleAvecAujourdhui()->format("%a jours, %h heures, %i minutes et %s secondes");
    }
}