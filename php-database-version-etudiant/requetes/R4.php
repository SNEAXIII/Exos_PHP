<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur
*/
$dateCreation = readline("Saisir une date (dd/mm/yyyy) : ");

$resultats = [];

// test
print_r($resultats);