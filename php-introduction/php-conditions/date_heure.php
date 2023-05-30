<?php

$time = new DateTime();

$date_a_afficher = $time->format('d/m/Y');
echo "Aujourd'hui nous somme le ".$date_a_afficher;
echo PHP_EOL;

$heure = $time->format('H\hi');
echo "Il est ".$heure;
echo PHP_EOL;

$heure = intval($time->format('H'));
if (13<=$heure && 24>=$heure) {
    echo "Bonne journée";
} else {
    echo "Bonne matinée";
};
echo PHP_EOL;

date_default_timezone_set('Europe/Paris');

$date_a_afficher = date('d/m/Y');
echo "Aujourd'hui nous somme le ".$date_a_afficher;
echo PHP_EOL;

$heure = date('H\hi');
echo "Il est ".$heure;
echo PHP_EOL;