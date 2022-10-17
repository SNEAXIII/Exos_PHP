<?php

function calculMention($moyenne) {
    if ($moyenne >=0 && $moyenne < 10) {
        $phrase = "Vous n'avez pas votre diplôme";
    } elseif ($moyenne < 12) {
        $phrase = "Mention passable";
    } elseif ($moyenne < 14) {
        $phrase = "Mention assez bien";
    } elseif ($moyenne < 16) {
        $phrase = "Mention bien";
    } elseif ($moyenne <= 20) {
        $phrase = "Mention très bien";
    } else {
        $phrase = "Les notes sont mal saisies";
    }
    return $phrase;
}

$liste = [];
$longueurListe = count($liste);

if ($liste != []) {

    $phrase = null;
    $total = 0;

    foreach ($liste as $note) {
        $total += $note;
    }

    $moyenne = round($total / $longueurListe,2);

    echo calculMention($moyenne);
} else {
    echo "Veuillez saisir des notes";
}

