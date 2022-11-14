<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 1
 * Récupérer les articles actifs (articles à afficher)
 * On souhaite récupérer l'id, le titre, le contenu et la date de création
*/

$resultats = [];

foreach ($tableArticles as $id => $item) {
    $resultats[] =
        [
            "id" => $id,
            "titre" => $item["titre"],
            "contenu" => $item["contenu"],
            "date_creation" => $item["date_creation"],
        ];
}

// test
print_r($resultats);

