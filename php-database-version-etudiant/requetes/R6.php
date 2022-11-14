<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/

$auteurId = readline("Saisir l'id d'un auteur : ");

