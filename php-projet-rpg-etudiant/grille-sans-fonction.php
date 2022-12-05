<?php

require 'constantes.php';

// **************************************************
// Déclaration des variables
// **************************************************
$grille = [];
const POSITION_VIDE = '-';

$largeur = readline("Saisir une largeur : ");
$hauteur = readline("Saisir une hauteur : ");

// **************************************************
// Initialiser la grille avec des positions vides
// **************************************************

// Parcours de chaque ligne
for($i=0; $i<$hauteur; $i++) {
    // Parcours de chaque colonne
    for($j=0; $j<$largeur; $j++) {
        $grille[$i][$j] = POSITION_VIDE;
    }
}

// **************************************************
// Afficher la grille
// **************************************************
$numerosColonne = str_repeat(' ',5) ;
for ($i=0; $i < $largeur; $i++) {
    $numerosColonne .= BLUE . sprintf('%02d  ', $i) . RESET;
}
$numerosColonne .= PHP_EOL;
echo $numerosColonne;

$lignes = '';
foreach ($grille  as $numero=>$ligne) {
    $uneLigne = BLUE . sprintf('%02d', $numero) . RESET;
    foreach ($ligne as $position) {
        $uneLigne .= ' | ' . YELLOW.POSITION_VIDE.RESET ;
    }
    $lignes .= $uneLigne . ' | ' . PHP_EOL;}
echo $lignes;