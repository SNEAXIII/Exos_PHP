<?php

function calculMention($moyenne) {
    $phrase = null;
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

$liste = [15,10];
$longueurListe = count($liste);

if ($longueurListe > 0) {
    $total = 0;
    foreach ($liste as $note) {
        $total += $note;
    }

    $moyenne = round($total / $longueurListe,2);

    echo "Version boucle : "."\n".calculMention($moyenne)."\n";


    $moyenne = round(array_sum($liste)/count($liste),2);

    echo "Version avec fonctions : "."\n".calculMention($moyenne)."\n";


} else {
    echo "Les notes sont mal saisies";
}
