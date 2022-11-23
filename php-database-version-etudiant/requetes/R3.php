<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie
*/

function r3(array $tableArticles, array $tableCategories) : array
{
    $resultats = [];
    foreach ($tableArticles as $idArticle => $article) {
        foreach ($tableCategories as $idCategorie => $categorie) {
            if ($article["id_categorie"] == $idCategorie) {
                $resultats[] =
                    [
                        "id" => $idArticle,
                        "titre" => $article["titre"],
                        "contenu" => $article["contenu"],
                        "date_creation" => $article["date_creation"],
                        "nom_categorie" => $categorie["libelle"],
                    ];
            }
        }
    }
    return $resultats;
}

// test
$resultats = r3($tableArticles, $tableCategories);
foreach ($resultats as $item) {
    echo $item["id"]." ";
}