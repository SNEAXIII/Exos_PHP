<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles
*/

/*
// version avec double boucles
function r7(array $tableArticles,$tableAuteurs) : array {
    $resultats = [];
    $nombreArticleParAuteur = array_count_values(array_column($tableArticles, 'id_auteur'));
    foreach ($tableArticles as $idArticle=>$article) {
        foreach ($tableAuteurs as $idAuteur=>$auteur) {
            if (! array_key_exists($idAuteur, $resultats) && $idArticle == $idAuteur) {
                $resultats[$idAuteur] = [
                    "prenom" => $auteur["prenom"],
                    "nom" => $auteur["nom"],
                    "nombreArticlesEcrits" => $nombreArticleParAuteur[$idAuteur]
                ];
            }
        }
    }
    return $resultats;
}
*/

//version rapide
function r7(array $tableArticles,$tableAuteurs) : array {
    $resultats = [];
    $nombreArticleParAuteur = array_count_values(array_column($tableArticles, 'id_auteur'));
    foreach ($tableAuteurs as $idAuteur=>$auteur) {
        $resultats[$idAuteur] = [
            "prenom" => $auteur["prenom"],
            "nom" => $auteur["nom"],
            "nombreArticlesEcrits" => $nombreArticleParAuteur[$idAuteur]
        ];
    }
    return $resultats;
}


// test

$resultats = r7($tableArticles,$tableAuteurs);

print_r($resultats);