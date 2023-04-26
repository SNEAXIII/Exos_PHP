<?php

/*
 * Exercice 6 : Modification d'objets DateTime avec la méthodes
 */

// Créer un objet DateTime avec la date du 22/06/2019 à 9h15
$date = new DateTime('2019-06-22 09:15');
// Ajouter 1 mois à la date avec la méthode modify
$date->modify("+1 month");
// Afficher la date au format jj/mm/aaaa hh:mm
echo $date->format('d/m/Y H:i');
echo PHP_EOL;
// Ajouter 2 ans 3 mois et 1 jour à la date avec la méthode modify
$date->modify("+2 years +3 months +1 day");
// Afficher la date au format jj/mm/aaaa hh:mm
echo $date->format('d/m/Y H:i');
echo PHP_EOL;
// Retirer 1 mois 2 heures et 30 minutes à la date avec la méthode modify
$date->modify("-1 month -2 hours -30 minutes");
// Afficher la date au format jj/mm/aaaa hh:mm
echo $date->format('d/m/Y H:i');
echo PHP_EOL;
