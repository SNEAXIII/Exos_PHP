<?php


$nb = readline("selectionnez un chiffre : ");

while ($nb <= 100) {

    if ($nb % 2 == 0) {
        echo $nb."\n";
    }

    $nb += 1;
}
