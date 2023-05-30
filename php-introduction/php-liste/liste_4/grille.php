<?php

//echo sprintf("%02d", 3);

const COULEUR = [
    "texteFondBlanc" => "\033[0m",
    "texteJaune" => "\033[33m",
    "texteBleu"  => "\033[34m",
];


function construitTableau2D($hauteur,$largeur): ?array {
    if ($hauteur < 0) return null;
    $tab = [];
    $positionVide = "-";
    for ($i1=0;$i1<=$hauteur;$i1++) {
        $tab[] = [];
        for ($i2=0;$i2<=$largeur;$i2++) {
            $tab[$i1][] = $positionVide;
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
        echo COULEUR["texteBleu"].sprintf("%02d", $i1).COULEUR["texteFondBlanc"]."  ";
    }
    echo "\n";
    foreach ($tab as $i1=>$y) {
        echo COULEUR["texteBleu"].sprintf("%02d", $i1).COULEUR["texteFondBlanc"]." ";
        foreach ($y as $i2=>$x) {
            echo "| ".COULEUR["texteJaune"]."$x".COULEUR["texteFondBlanc"]." ";

        }
        echo "|\n";

    }
}
//$hauteur = readline("Saisissez une hauteur");
//$largeur = readline("Saisissez une largeur");

$hauteur = 10;$largeur = 45;

$tableau2D = construitTableau2D($hauteur,$largeur);

afficheTableau2D($tableau2D);

//print_r($