<?php
$tab = [12,15,16,17,55,44];
$tab = [12,15,"s",17,"ssss",44];

function afficherTableau(array $tab) {
    foreach ($tab as $elem) {
        echo "$elem ";
    }
    echo "\n";
}

afficherTableau($tab);