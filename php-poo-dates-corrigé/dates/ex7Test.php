<?php

/*
 * Exercice 7 : fuseau horaire d'un objet DateTime
 */

// Créer un objet DateTime avec la date du jour et l'heure courante
$date = new DateTime();
// Afficher le fuseau horaire de l'objet
echo $date->getTimezone()->getName();
echo PHP_EOL;
// Modifier le fuseau horaire de l'objet pour qu'il soit à New York
$date->setTimezone(new DateTimeZone('America/New_York'));
// Afficher la date du jour au format jj/mm/aaaa hh:mm
echo $date->format('d/m/Y H:i');
echo PHP_EOL;
// Créer un objet DateTime avec la date du jour et l'heure courante et le fuseau horaire de New York
$date = new DateTime('now', new DateTimeZone('America/New_York'));
// Afficher la date du jour au format jj/mm/aaaa hh:mm
echo $date->format('d/m/Y H:i');
echo PHP_EOL;
