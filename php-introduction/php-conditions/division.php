<?php

$nombre1 = readline("Saisir un nombre entier : ");
$nombre2 = readline("Saisir un nombre entier non nul : ");

if ($nombre2==0) {

    echo "Veillez choisir un diviseur non nul";

} else {

    $resultat = round($nombre1 / $nombre2,2);
    echo "Le résultat de la division de $nombre1 par $nombre2 est $resultat";

}
