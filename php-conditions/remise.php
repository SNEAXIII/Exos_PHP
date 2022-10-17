<?php

$fondRouge = "\033[41m";
$normal = "\033[0m";

$prix = readline("Saisir un prix ");

if (0 <= $prix && $prix < 1000) {
    $tauxBonus = 0.05;
} elseif (5000 > $prix && $prix >= 1000) {
    $tauxBonus = 0.1;
} elseif ($prix >= 5000) {
    $tauxBonus = 0.2;
}
$prixBonus = $prix * $tauxBonus;
$prixFinal = $prix - $prixBonus;

echo "La remise est ".round($tauxBonus*100)."% soit ".$fondRouge.$prixBonus.$normal."€ offert.\nLe prix à payer est ".$fondRouge.$prixFinal.$normal."€".PHP_EOL;
