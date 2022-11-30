<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/
function r6(array $tableArticles) : int{
    $auteurId = readline(3);
    $nb = 0;
    echo "test";
    foreach ($tableArticles as $item) {
        $siIdItemEgalIdUtilisateur = $auteurId == $item["id_auteur"];
        if ($siIdItemEgalIdUtilisateur) $nb++;
    }
    return $nb;

}


$resultat = r6($tableArticles);
//foreach ($resultats as $item) {
//    echo $item["id"]." ";
//}
echo $resultat;