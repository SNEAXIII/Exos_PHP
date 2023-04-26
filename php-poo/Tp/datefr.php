<?php
class DateFr {
    private DateTime $date;

    public function __construct(string $date)
    {
        $this->date = DateTime::createFromFormat("d/m/Y",$date);
        $this->date->setTime(0,0);
    }
    public function format() : string
    {
        return $this->date->format("d/m/Y");
    }
    public function ajouterMois(int $nb) : void
    {
        $this->date->modify("+$nb month");
    }
    public function soustraireMois(int $nb) : void
    {
        $this->date->modify("-$nb month");
    }
    public function ajouterJour(int $nb) : void
    {
        $this->date->modify("+$nb day");
    }
    public function soustraireJours(int $nb) : void
    {
        $this->date->modify("-$nb day");
    }
    public function diffJours(DateFr $date2) : int
    {
        return $this->date->diff($date2->date)->days;
    }
}