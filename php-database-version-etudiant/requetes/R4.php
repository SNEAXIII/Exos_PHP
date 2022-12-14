<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur
*/

function siDateCreationSuperieureADateUtilisateur(string $dateCreation, string $dateUtilisateur) : bool
{
//    conversion des dates en secondes pour faciliter la comparaison
    $dateEnSecondeCreation = strtotime($dateCreation);
    $dateEnSecondeUtilisateur = strtotime($dateUtilisateur);
//    vérifie si les 2 dates sont valides
    if (!($dateEnSecondeCreation && $dateEnSecondeUtilisateur)) {
        return false;
    }
//    compare les 2 dates
    if ($dateEnSecondeCreation > $dateEnSecondeUtilisateur) {
        return true;
    }
    return false;
}


function r4(array $tableArticles, array $tableAuteurs) {
    $resultats = [];
//$dateCreation = strval(readline("Saisir une date (dd/mm/yyyy) : "));
    $dateUtilisateur = str_replace("/","-","15-09-2022");
    foreach ($tableArticles as $idArticle => $article) {
        foreach ($tableAuteurs as $idAuteur => $auteur) {
            $siDateCreationSuperieureADateUtilisateur = siDateCreationSuperieureADateUtilisateur($article["date_creation"], $dateUtilisateur);
            $siIdAuteurEgalArticleTiAuteur = $idAuteur == $article["id_auteur"];
            if ($siIdAuteurEgalArticleTiAuteur && $siDateCreationSuperieureADateUtilisateur) {
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
    return $resultats;
}


// test
$resultats = r4($tableArticles, $tableAuteurs);
foreach ($resultats as $item) {
    echo $item["id"]." ";
}
