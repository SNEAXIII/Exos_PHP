<?php

$fondVert = "\033[42m";
$fondRouge = "\033[41m";
$normal = "\033[0m";

$distance = readline("Saisir une distance (en kms) : ");
$duree = readline("Saisir une durée (format h:mn) : ");


if (substr_count($duree,":")==1) {
    $indexDeuxPoints = strpos($duree,":");
    $nombreMinute = intval(substr($duree,$indexDeuxPoints+1, strlen($duree)-$indexDeuxPoints+1));
    if ($nombreMinute >=0 && $nombreMinute < 60) {
        $nombreHeure = intval(substr($duree,0,$indexDeuxPoints));
        $dureeDecimale = $nombreHeure + $nombreMinute/60;
        $vitesse = ceil($distance / $dureeDecimale);
        
        if ($vitesse > 90) {
            echo $fondRouge."Tu roules trop vite à $vitesse/h".$normal;
        } else {
            echo $fondVert."Tu roules à la bonne a vitesse $vitesse/h".$normal;
        }
    } else {
        echo "Le nombre de minutes est invalide";
    }
} else {
    echo "L'heure est mal saisi";
}
echo PHP_EOL;