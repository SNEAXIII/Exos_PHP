<?php

$nb_min = readline("selectionnez un chiffre : ");

for ($nb = $nb_min;$nb <= 100;$nb++) {
    if ($nb % 2 == 0) {
        echo $nb."\n";
    }
}
