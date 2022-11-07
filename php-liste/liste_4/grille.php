<?php

//echo sprintf("%02d", 3);

$couleurs = [
    "texteFondBlanc" => "\033[0m",
    "texteJaune" => "\033[33m",
    "texteBleu"  => "\033[34m",
];


function construitTableau2D($hauteur,$largeur): ?array {
    if ($hauteur < 0){
        return null;
    }
    $tab = [];
    for ($i1=0;$i1<=$hauteur;$i1++) {
        $tab[] = [];
        for ($i2=0;$i2<=$largeur;$i2++) {
            $tab[$i1][] = "_";
        }
    }
    return $tab;
}

function afficheTableau2D($tab) {
    if (count($tab) < 0){
        return null;
    }
    global $couleurs;
    $indicePremiereLigne = "    ";
    echo $indicePremiereLigne;
    foreach ($tab[0] as $i1=>$x) {
        echo $couleurs["texteBleu"].sprintf("%02d", $i1).$couleurs["texteFondBlanc"]."  ";
    }
    echo "\n";
    foreach ($tab as $i1=>$y) {
        echo $couleurs["texteBleu"].sprintf("%02d", $i1).$couleurs["texteFondBlanc"]." ";
        foreach ($y as $i2=>$x) {
            echo "| ".$couleurs["texteJaune"]."$x".$couleurs["texteFondBlanc"]." ";

        }
        echo "|\n";

    }
}
//$hauteur = readline("Saisissez une hauteur");
//$largeur = readline("Saisissez une largeur");

$hauteur = 15;$largeur = 15;

$tableau2D = construitTableau2D($hauteur,$largeur);

afficheTableau2D($tableau2D);

//print_r($tableau2D);