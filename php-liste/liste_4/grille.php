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
    $i1=0;
    foreach ($tab as $y) {
        echo $couleurs["texteBleu"].sprintf("%02d", $i1).$couleurs["texteFondBlanc"];echo " ";
        $i2=0;
        foreach ($y as $x) {
            echo "| ".$couleurs["texteJaune"]."$x".$couleurs["texteFondBlanc"]." ";
            $i2++;
        }
        echo "|\n";
        $i1++;
    }
}


//$hauteur = readline("Saisissez une hauteur");
//$largeur = readline("Saisissez une largeur");

$hauteur = 5;$largeur = 5;

$tableau2D = construitTableau2D($hauteur,$largeur);

afficheTableau2D($tableau2D);

//print_r($tableau2D);