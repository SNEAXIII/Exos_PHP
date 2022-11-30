<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles
*/

function r7() {
    $resultats = [];
    $nombreArticleParAuteur = array_count_values()
    foreach ($tableArticle as $id=>$article) {

    }
}


// test

print_r($resultats);