<?php

$liste = [10,21];
$longueurListe = count($liste);

if ($longueurListe > 0) {


    $max = $liste[0];

    foreach ($liste as $note) {
        if ($max < $note) {
            $max = $note;
        }
    }
    echo "Avec la méthode boucle : ".$max."\n";

    $max = max($liste);

    echo "Avec la méthode max() : ".$max;
}

