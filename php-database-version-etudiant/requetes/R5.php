<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie
*/
function r5() : array
{
    $temporaire = [];
    $resultats = [];

    return $resultats;
}

// test
$resultats = r5();

print_r($resultats);
