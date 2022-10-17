<?php

$nombrePhotocopie = intval(readline("Nombre de photocopies à réaliser :"."\n"));
if ($nombrePhotocopie<0) {
    echo "Le nombre de photocopie doit etre supérieur ou égal à 0.";
} else {
    $prix = 0;

    if ($nombrePhotocopie<=10) {
        $prix = $nombrePhotocopie * 0.3;
    } elseif ($nombrePhotocopie<=30) {
        $prix = 10 * 0.3 + ($nombrePhotocopie - 10) * 0.25;
    } else {
        $prix = 10 * 0.3 + 10 * 0.25 * ($nombrePhotocopie - 30) * 0.20;
    }

    if ($prix > 50) $prix *= 0.9;

    echo "Le prix a payer est $prix €"."\n";
}

