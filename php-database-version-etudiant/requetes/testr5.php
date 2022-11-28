<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

print_r($tableArticles);
$collone = array_column($tableArticles["titre"]);
array_multisort($collone,SORT_ASC, SORT_STRING, $tableArticles);
print_r($tableArticles);
