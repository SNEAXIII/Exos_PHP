<?php

$prixHT = readline("Saisir un prix HT : ");
$tauxTva = readline("Saisir un taux de TVA : ")/100+1;

echo "Le prix TTC est : ".round($prixHT*$tauxTva,2);
