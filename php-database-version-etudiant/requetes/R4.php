<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur
*/
$resultats = [];
//$dateCreation = strval(readline("Saisir une date (dd/mm/yyyy) : "));
$dateUtilisateur = "10/10/2030";
$dateUtilisateur = str_replace("/","-",$dateUtilisateur);


foreach ($tableArticles as $idArticle => $article) {
    foreach ($tableAuteurs as $idAuteur => $auteur) {
        $if = $article["date_creation"] > $dateUtilisateur;
        echo "a --> $article[date_creation], s --> $dateUtilisateur, $if\n";
//        echo "$idAuteur \ $article[id_auteur]\n";
        $siIdAuteurEgalArticleTiAuteur = $idAuteur == $article["id_auteur"];
        $article["date_creation"] > $dateUtilisateur
        if ($siIdAuteurEgalArticleTiAuteur && $siDate) {

            $resultats[] =
                [
                    "id" => $idArticle,
                    "titre" => $article["titre"],
                    "contenu" => $article["contenu"],
                    "date_creation" => $article["date_creation"],
                    "prenom" => $auteur["prenom"],
                    "nom" => $auteur["nom"]
                ];
        }
    }
}



// test
print_r($resultats);
