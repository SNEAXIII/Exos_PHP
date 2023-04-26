<?php
include_once "evenement.php";

$noel2023 = new Evenement("Noel 2023", "25/12/2023");
echo $noel2023->getNom() . PHP_EOL ;
echo $noel2023->getDate() . PHP_EOL ;
echo $noel2023->getNom() . " aura lieu dans " . $noel2023->getNbJours() . " jours" . PHP_EOL ;
echo $noel2023->getNom() . " aura lieu dans " . $noel2023->getCompteARebours() . PHP_EOL;