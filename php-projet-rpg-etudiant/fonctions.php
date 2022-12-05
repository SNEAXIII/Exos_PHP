<?php

require 'constantes.php';

// Fonction permettant d'effacer l'écran
function effacerEcran() : void {
    echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
}

function creerGrille(int $largeur, int $hauteur) : array {
    $tab = [];
    for ($i1=0;$i1<=$hauteur;$i1++) {
        $tab[] = [];
        for ($i2=0;$i2<=$largeur;$i2++) {
            $tab[$i1][] = POSITION_VIDE;
        }
    }
    return $tab;
}
function afficheTableau2D($tab) {
    if (count($tab) < 0){
        return null;
    }
    $indicePremiereLigne = str_repeat(" ",4);
    echo $indicePremiereLigne;
    foreach ($tab[0] as $i1=>$x) {
        echo sprintf("%02d", $i1)."  ";
    }
    echo "\n";
    foreach ($tab as $i1=>$y) {
        echo sprintf("%02d", $i1)." ";
        foreach ($y as $i2=>$x) {
            echo BORDURE." "."$x"." ";

        }
        echo BORDURE."\n";

    }
}
$grid = creerGrille(5,7);
afficheTableau2D($grid);
