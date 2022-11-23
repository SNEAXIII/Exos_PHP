<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 1
 * Récupérer les articles actifs (articles à afficher)
 * On souhaite récupérer l'id, le titre, le contenu et la date de création
*/

function r1(array $tableArticles) : array
{
    $resultats = [];
    foreach ($tableArticles as $id => $item) if ($item["actif"]) {
        $resultats[] =
            [
                "id" => $id,
                "titre" => $item["titre"],
                "contenu" => $item["contenu"],
                "date_creation" => $item["date_creation"],
            ];
    }
    return $resultats;
}

// test
$resultats = r1($tableArticles);
foreach ($resultats as $item) {
    echo $item["id"]." ";
}

