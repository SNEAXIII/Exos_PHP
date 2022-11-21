<?php

require_once "FX.php";

$tab = [12,15,16,17,55,44];
$tab2 = [12,15,"s",17,"ssss",44];

function rechercherNombrePair(array $tab) : array
{
    $resultats = [];
    $siTabNonVide = count($tab) != 0;
    if ($siTabNonVide) {
        foreach ($tab as $element) {
            $siNombrePair = $element % 2 == 0;
            if ($siNombrePair) {
                $resultats[] = $element;
            }
        }
    }
    return $resultats;
}

//afficherTableau(rechercherNombrePair($tab));

afficherTableau($tab);
doubleLesElements($tab);
afficherTableau($tab);

//afficherTableau($tab2);