<?php

function affiche($villeDepart,$villeArrivee,$prix,$solde,$avoir,$trajetValide) {
    if ($trajetValide) {
        $trajet = afficheTrajet($villeDepart,$villeArrivee,$prix);
        $nouveauSolde = afficheSolde($solde,$avoir);
        return $trajet.PHP_EOL.$nouveauSolde.PHP_EOL;
    } else {
        return "Désolé mais les trajets hors Paris ne sont pas proposés par notre société.".PHP_EOL."Votre solde est de $solde"."€ et votre avoir est de $avoir"."€.".PHP_EOL;
    }
}

function afficheTrajet($villeDepart,$villeArrivee,$prix) {
        return "Trajet de $villeDepart vers $villeArrivee pour un montant de $prix"."€.";
}

function afficheSolde($solde,$avoir) {
    if ($solde >=0) {
        return "Votre nouveau solde est de $solde"."€ et votre nouvel avoir est de $avoir"."€.";
    } else {
        return "Désolé mais votre solde est insuffisant. Veuillez créditer votre solde.";
    }
}

/*
$pointDepart = "20 rue des lilas 75000 Paris"; //readline("Point de départ : " ."\n");
$pointArrivee ="110 rue de la gare 92000 Colombes"; // readline("Point d’arrivée : "."\n");
$solde = 100; // readline("Votre solde : "           ."\n");
$avoir = 8; // readline("Votre avoir : "           ."\n");
$prix = 0;
$trajetValide = TRUE;
*/

/* 
$pointDepart = "20 rue des lilas 75000 Paris"; //readline("Point de départ : " ."\n");
$pointArrivee ="110 rue de la gare 92000 Colombes"; // readline("Point d’arrivée : "."\n");
$solde = 40; // readline("Votre solde : "           ."\n");
$avoir = 8; // readline("Votre avoir : "           ."\n");
$prix = 0;
$trajetValide = TRUE;
*/

 
$pointDepart = "52 rue du stade 93200 Saint-Denis"; //readline("Point de départ : " ."\n");
$pointArrivee ="110 rue de la gare 92000 Colombes"; // readline("Point d’arrivée : "."\n");
$solde = 90; // readline("Votre solde : "           ."\n");
$avoir = 5; // readline("Votre avoir : "           ."\n");
$prix = 0;
$trajetValide = TRUE;


$villeDepart = substr($pointDepart,strrpos($pointDepart," ")+1,null);
$villeArrivee = substr($pointArrivee,strrpos($pointArrivee," ")+1,null);

$estTrajetIntraMuros = $villeDepart == "Paris" && $villeArrivee == "Paris";
$estTrajetParisVersExterieur = $villeDepart == "Paris" && $villeArrivee != "Paris";
$estTrajetExterieurVersParis = $villeDepart != "Paris" && $villeArrivee == "Paris";


if ($estTrajetIntraMuros) {
    $prix = 30;
    $solde -= $prix;
} elseif ($estTrajetParisVersExterieur) {
    $prix = 50;
    $solde += $avoir - $prix;
    $avoir = 0;
} elseif ($estTrajetExterieurVersParis) {
    $prix = 40;
    $solde += $avoir/2 - $prix;
    $avoir /= 2;
} else {
    $trajetValide = FALSE;
}

echo affiche($villeDepart,$villeArrivee,$prix,$solde,$avoir,$trajetValide);
