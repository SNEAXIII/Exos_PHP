<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur
*/

//$dateCreation = strval(readline("Saisir une date (dd/mm/yyyy) : "));
$dateCreation = "10/10/2000";
$dateCreation = str_replace("/","-",$dateCreation);

echo substr_count($dateCreation,"");

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


$resultats = [];


// test
print_r($resultats);
