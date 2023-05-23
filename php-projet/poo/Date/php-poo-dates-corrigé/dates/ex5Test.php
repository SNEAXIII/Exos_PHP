<?php

/*
 * Exercice 5 : Modification d'objets DateTime avec les méthodes add et sub
 */

// Créer un objet DateTime avec la date du 22/06/2019 à 9h15
$date = new DateTime('2019-06-22 09:15');
// Ajouter 1 mois à la date
$date->add(new DateInterval('P1M'));
// Afficher la date au format jj/mm/aaaa hh:mm
echo $date->format('d/m/Y H:i');
echo PHP_EOL;
// Ajouter 2 ans, 3 mois, 1 jour, 4 heures, 5 minutes et 6 secondes à la date
$date->add(new DateInterval('P2Y3M1DT4H5M6S'));
// Afficher la date au format jj/mm/aaaa hh:mm
echo $date->format('d/m/Y H:i');
echo PHP_EOL;
// Retirer 1 mois, 2 heures et 30 minutes à la date
$date->sub(new DateInterval('P1MT2H30M'));
// Afficher la date au format jj/mm/aaaa hh:mm
echo $date->format('d/m/Y H:i');
echo PHP_EOL;
