<?php

function doubleLesElements(array &$tab) : void
{
    foreach ($tab as &$elem) {
        $elem *= 2;
    }
}

function afficherTableau(array $tab) {
    foreach ($tab as $elem) {
        echo "$elem ";
    }
    echo "\n";
}