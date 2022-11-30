<?php

//require "../base-de-donnees/tableArticle.php";
//require "../base-de-donnees/tableAuteur.php";
//require "../base-de-donnees/tableCategorie.php";

$tableAuteurs = [
    "1" =>["prenom"=>"jean","nom"=>"dupond","age"=>60],
    "2" =>["prenom"=>"alain","nom"=>"durand","age"=>18],
    "3" =>["prenom"=>"anne","nom"=>"martin","age"=>84],
    "4" =>["prenom"=>"marie","nom"=>"thomas","age"=>25],
    "5" =>["prenom"=>"pierre","nom"=>"sapin","age"=>54],
];

foreach ($tableAuteurs as $item) {
    echo $item["prenom"]."\n";
}

$collone = array_column($tableAuteurs, "age");
array_multisort($collone,SORT_ASC, SORT_STRING, $tableAuteurs);

echo "--------------------------------------------"."\n";
foreach ($tableAuteurs as $item) {
    echo $item["prenom"]."\n";
}
