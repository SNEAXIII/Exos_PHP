<?php

$resultatsBTS = [
    ['nom' => "DUPOND", 'moyenne' => 12.80],
    ['nom' => "MARTIN", 'moyenne' => 9.80],
    ['nom' => "DURAND", 'moyenne' => 15.60],
    ['nom' => "PETIT", 'moyenne' => 10.90]
];

// Afficher le nom de chaque étudiant avec une boucle for
for ($i=0; $i < count($resultatsBTS); $i++) {
    echo $resultatsBTS[$i]['nom'] . PHP_EOL;
}
echo PHP_EOL;
// Afficher le nom de chaque étudiant avec une boucle foreach
foreach ($resultatsBTS as $etudiant) {
    echo $etudiant['nom'] . PHP_EOL;
}

// Afficher le nom et la moyenne de tous les étudiants réçus
echo PHP_EOL;
// Afficher le nom de chaque étudiant avec une boucle foreach
foreach ($resultatsBTS as $etudiant) {
    if ($etudiant['moyenne'] >= 10) {
        echo $etudiant['nom'] . " a une moyenne de " . $etudiant['moyenne'] . PHP_EOL;
    }
}

// Afficher le major de la promotion
echo PHP_EOL;
// Afficher le nom de chaque étudiant avec une boucle foreach
$moyenneMax = 0;
$major = [];
foreach ($resultatsBTS as $etudiant) {
    if ($etudiant['moyenne'] >= $moyenneMax) {
       $moyenneMax = $etudiant['moyenne'];
       $major = $etudiant;
    }
}

print_r($major);

