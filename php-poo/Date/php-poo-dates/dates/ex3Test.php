<?php

/*
 * Exercice 3 : création d'objets DateTime et différence de dates
 */

// Créer 2 objets DateTime :
// - le premier représente la date du jour et l'heure courante
// - le second représente la date du 22/06/2019 à 9h15
$format = "d/m/Y H:i";
$premiereDate = new DateTime("now");
$deuxiemeDate = DateTime::createFromFormat($format, "22/06/2019 9:15");
// Calculer la différence entre la date du jour et la date du 22/06/2019 à 9h15
//$dateInterval = (new DateTime) -> diff($premiereDate,$deuxiemeDate);
$dateInterval = $premiereDate -> diff($deuxiemeDate);
// Afficher le nombre de jours entre les 2 dates
echo $dateInterval -> days;
echo PHP_EOL;
// Afficher le nombre d'années, mois et jours entre les 2 dates
echo $dateInterval -> format("%y ans, %m mois et %d jours");
echo PHP_EOL;
// Afficher le nombre de jours, heures, minutes et secondes entre les 2 dates
echo $dateInterval -> format("%a jours, %h heures, %i minutes et %s secondes");
echo PHP_EOL;
// Afficher le nombre de mois entre les 2 dates
$mois = $dateInterval->y * 12 + $dateInterval->m;
echo "Il s'est écoulé $mois mois entre les 2 dates";
