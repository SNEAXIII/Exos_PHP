<?php 
$a = intval(readline("Entrez le coef a : "));
$b = intval(readline("Entrez le coef b : "));
$c = intval(readline("Entrez le coef c : "));

echo "Résolution de $a"."x² + $b"."x + $c"."\n";

$delta = $b**2 - (4 * $a* $c);

if ($delta<0) {
    echo "Il n'exite pas de solution réelle";
} elseif ($delta == 0) {
    $resultat = -$b / (2*$a);
    echo "Le résultat est $resultat"."\n";
} else {
    $resultat1 = round((-$b -sqrt($delta))/ (2*$a),3);
    $resultat2 = round((-$b +sqrt($delta))/ (2*$a),3);
    echo "Il y a 2 solutions distinctes :\n        x1 = $resultat1\n        x2 = $resultat2"."\n";
}
