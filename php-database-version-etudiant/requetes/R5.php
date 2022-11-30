<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie
*/
function r5(array $tableArticles,array $tableCategories) : array
{
    $collone = array_column($tableArticles, "titre");
    array_multisort($collone,SORT_ASC, SORT_STRING, $tableArticles);
    $resultats = [];
    foreach ($tableArticles as $ida=>$article) {
        foreach ($tableCategories as $idc=>$categorie) {
            if ($article["id_categorie"] == $idc && $article["actif"]) {
                $resultats[]=[
                    "id" => $ida,
                    "titre" => $article["titre"],
                    "date_creation" => $article["date_creation"],
                    "nom_categorie" => $categorie["libelle"],
                ];
            }
        }
    }
    return $resultats;
}

// test
$resultats = r5($tableArticles,$tableCategories);

print_r($resultats);
