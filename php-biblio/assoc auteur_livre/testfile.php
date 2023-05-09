<?php
require_once "src/class/Auteur.php";
require_once "src/class/Livre.php";

$fermeAnimaux = new Livre("2070375161", "La ferme aux animaux", 500, "01/01/2000");

$georgesOrwell = new Auteur("Orwell", "Georges", [$fermeAnimaux,$fermeAnimaux,$fermeAnimaux]);

$livre1984 = new Livre("207036822X", "1984", 500, "01/01/2000", $georgesOrwell);

$hommageCatalogne = new Livre("2851841300", "Hommage à la Catalogne", 500, "01/01/2000");

$georgesOrwell->ajouteLivre($hommageCatalogne);

echo $georgesOrwell . PHP_EOL;
