<?php

// Tableau représentant la grille
$grille = [];
// constante : "variable" initailisée à sa déclaration
// et qui ne peut plus être modifiée par la suite
const POSITION_VIDE = '-';
const POSITION_HERO = "H";

// Constantes pour les couleurs
const VERT = "\033[32m";
const JAUNE = "\033[33m";
const BLEU = "\033[34m";
const ROUGE = "\033[31m";
const RESET = "\033[0m";


// Dimensions de la grille
$hauteur = readline("Saisir la hauteur de la grille : ");
$largeur = readline("Saisir la largeur de la grille : ");

//***************************************
// Initialisation de la grille
//***************************************
for($i=0 ; $i < $hauteur ; $i++) {
    for($j=0; $j < $largeur; $j++) {
        // Accès à une position (élément du tableau)
        $grille[$i][$j] = POSITION_VIDE;
    }
}

//***************************************
// Positionnement du héro aléatoirement
//***************************************
$heroLigne = mt_rand(0,$hauteur-1);
$heroColonne = mt_rand(0,$largeur-1);
$grille[$heroLigne][$heroColonne] = POSITION_HERO;

//***************************************
// Affichage de la grille
//***************************************

// Affichage des numéros de colonne
echo str_repeat(' ',5);
for ($i=0; $i < $largeur; $i++) {
    echo BLEU.sprintf("%02d  ",$i).RESET;
}
echo PHP_EOL;
foreach ($grille as $numero=>$ligne) {
    // Affichage d'une ligne
    echo BLEU.sprintf("%02d",$numero).RESET;
    foreach ($ligne as $position) {
        // Tester si la position contient le héro
        if ($position == POSITION_HERO) {
            echo " | ".BLEU.$position.RESET;
        } else {
            echo " | ".JAUNE.$position.RESET;
        }
    }
    echo " |";
    // Une nouvelle ligne
    echo PHP_EOL;
}







