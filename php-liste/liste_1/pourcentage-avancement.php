<?php

$nombreAIterer = 1000000;
$listeNombre = array_fill(0,$nombreAIterer, "test");

$texteRouge = "\033[31m";
$texteVert  = "\033[32m";
$texteFondBlanc = "\033[0m";

$pourcentage = null;
$ancienPourcentage = null;

echo "debut traitement"."\n";

$i = 0;
foreach ($listeNombre as $item) {


    $pourcentage = floor($i*100/$nombreAIterer);

//    Cette boucle permet de ralentir la vitesse d'éxecution du script
    for ($a=0;$a<1000;$a++) {
        $val = null;
    }
    if ($pourcentage != $ancienPourcentage) {

        $ancienPourcentage = $pourcentage;
        echo "\ren cours ".$texteRouge.$pourcentage."%".$texteFondBlanc;
    }
    $i++;
}
echo "\r".$texteVert."100%".$texteFondBlanc."\n";
echo "fin traitement"."\n"."\n";
echo "$nombreAIterer valeurs ont été traitées";