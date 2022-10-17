<?php

function recupereReponse() {
    $reponse = readline("Saisir une note : "."\n");
    return $reponse;
}

$reponse = recupereReponse();

while ($reponse < 0 || $reponse > 20) {
    echo "La note doit etre comprise entre 0 et 20"."\n";
    $reponse = recupereReponse();
}

echo "La note est correcte"."\n";