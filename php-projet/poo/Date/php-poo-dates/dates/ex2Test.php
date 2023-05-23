<?php

/*
 * Exercice 2 : création d'objets DateTime
 */

// Créer un objet DateTime avec la date du 22/06/2019 à 9h15
// La date sera exprimée au format "aaaa-mm-jj hh:mm"
$date = new DateTime("2019-06-22 9:15");
// Afficher la date au format "jj/mm/aaaa hh:mm"
echo $date->format("d/m/Y H:i");
echo PHP_EOL;
// Créer un objet DateTime avec la date du 22/06/2019 à 9h15
// La date sera exprimée au format "jj/mm/aaaa hh:mm"
$format = "d/m/Y H:i";
$date = DateTime::createFromFormat($format, "22/06/2019 9:15");
// Afficher la date au format jj/mm/aaaa hh:mm
echo $date->format("d/m/Y H:i");
echo PHP_EOL;
