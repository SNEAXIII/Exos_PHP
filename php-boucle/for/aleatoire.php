<?php

$nb = readline("selectionnez un chiffre : ");

$trouve = false;

//assert($nb >= 0 && $nb <= 1000,'Choisir un nombre entre 0 et 1000');

for ($nombreCoup = 0;$nombreCoup < 200;$nombreCoup++) {
    $essaiBot = random_int(0,1000);
    if ($essaiBot == $nb) {
        $trouve = true;
        break;
    }
}

if ($trouve) {
    echo "Le bot a trouvé apres $nombreCoup essais."."\n";
} else {
    echo "Le bot n'a pas trouvé apres $nombreCoup essais."."\n";
}

