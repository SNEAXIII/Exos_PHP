<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

foreach ($tableArticles as $item) {
    echo $item["titre"]."\n";
}

$collone = array_column($tableArticles, "titre");
array_multisort($collone,SORT_ASC, SORT_STRING, $tableArticles);

echo "--------------------------------------------";
foreach ($tableArticles as $item) {
    echo $item["titre"]."\n";
}
