<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création
*/

$categorieId = readline("Saisir l'id d'une catégorie : ");

$resultats = [];

foreach ($tableArticles as $id => $item) {
    if ($categorieId == $item["id_categorie"]) {
        $resultats[] =
            [
                "id" => $id,
                "titre" => $item["titre"],
                "contenu" => $item["contenu"],
                "date_creation" => $item["date_creation"],
            ];
    }
}

// test
print_r($resultats);