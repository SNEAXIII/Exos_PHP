<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 5
 * Récupérer les articles à afficher ordonné par date de création (du plus récent au plus ancien)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie
*/

$resultats = [];

//test
print_r($resultats);