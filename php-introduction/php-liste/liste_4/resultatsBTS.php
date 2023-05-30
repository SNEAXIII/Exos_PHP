<?php

function afficheListe2DForEach($liste2D) {
    if (count($liste2D) != 0) {
        foreach ($liste2D as $eleve) {
            echo "L'élève $eleve[nom] a obtenu la moyenne de $eleve[moyenne]"."\n";
        }
    }
}

function afficheListe2DFor($liste2D) {
    $lenListe = count($liste2D);
    if ($lenListe != 0) {
        for ($i=0 ; $i<$lenListe ; $i++) {
            $nomEleve = $liste2D[$i]["nom"];
            $moyenne = $liste2D[$i]["moyenne"];
            echo "L'élève $nomEleve a obtenu la moyenne de $moyenne"."\n";
        }
    }
}

function afficheEleveRecu($liste2D) {
    if (count($liste2D) != 0) {
        foreach ($liste2D as $eleve) {
            $moyenne = $eleve["moyenne"];
            if ($moyenne >=10 && $moyenne <= 20) {
                $nomEleve = $eleve["nom"];
                echo "L'élève $nomEleve a obtenu la moyenne de $moyenne"."\n";
            }
        }
    }
}

function meilleurEleve($liste2D) {
    if (count($liste2D) != 0) {
        $max = [$liste2D[0]["nom"],$liste2D[0]["moyenne"]];
        foreach ($liste2D as $eleve) {
            if ($eleve["moyenne"] > $max[1]) {
                $max = [$eleve["nom"],$eleve["moyenne"]];
            }
        }
        $nomEleve = $max[0];
        $moyenne = $max[1];
        echo "L'élève $nomEleve a obtenu la moyenne de $moyenne"."\n";
    }
}

$listeEleves = [
  ["nom" => "Biscuits","moyenne"=>13],
  ["nom" => "Oreo","moyenne"=>18],
  ["nom" => "Tremper","moyenne"=>15],
  ["nom" => "Poignet","moyenne"=>17],
  ["nom" => "Lait","moyenne"=>6],
  ["nom" => "Whatsup","moyenne"=>9],
  ["nom" => "HUUUMMM","moyenne"=>4],
  ["nom" => "Cremaouch","moyenne"=>20],
];
echo "ForEach___________________________________________________________________________________________________"."\n";
afficheListe2DForEach($listeEleves);
echo "For_______________________________________________________________________________________________________"."\n";
afficheListe2DFor($listeEleves);
echo "Recu______________________________________________________________________________________________________"."\n";
afficheEleveRecu($listeEleves);
echo "Meilleur__________________________________________________________________________________________________"."\n";
meilleurEleve($listeEleves);