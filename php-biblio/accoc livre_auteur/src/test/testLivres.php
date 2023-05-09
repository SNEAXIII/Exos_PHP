<?php
require_once "../class/main.php";
$georgesOrwell = new Auteur("Orwell", "Georges");
$georgetteOrwell = new Auteur("Orwell", "Georgette");
$fermeAnimaux = new Livre("2070375161", "La ferme aux animaux", 500, "01/01/2000", $georgesOrwell);
echo $fermeAnimaux."\n";
$fermeAnimaux->setAuteur($georgetteOrwell);
echo $fermeAnimaux;

