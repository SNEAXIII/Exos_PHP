<?php
$tab = [12,15,16,17,55,44];
$tab2 = [12,15,"s",17,"ssss",44];

function afficherTableau(array $tab) {
    foreach ($tab as $elem) {
        echo "$elem ";
    }
    echo "\n";
}

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

function doubleLesElements(array &$tab) : void
{
    foreach ($tab as &$elem) {
        $elem *= 2;
    }
//    print_r($tab);
}

//afficherTableau(rechercherNombrePair($tab));

afficherTableau($tab);
doubleLesElements($tab);
afficherTableau($tab);

//afficherTableau($tab2);