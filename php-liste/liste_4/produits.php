<?php

function afficheReferenceDesignation($tableauProduit): void
{
    if (count($tableauProduit)!=0) {
        foreach ($tableauProduit as $reference => $produit) {
            $designation = $produit["Designation"];
            echo "$reference : $designation"."\n";
        }
    }
}
function afficheReferenceDesignationPrix($tableauProduit): void
{
    if (count($tableauProduit)!=0) {
        $valeurStock = 0;
        foreach ($tableauProduit as $reference => $item) {
            $designation = $item["Designation"];
            $valeurStock += $item["Prix"]*$item["Stock"];
            echo "$reference : $designation"."\n";
        }
        $valeurStockFormate = number_format($valeurStock,2,","," ");
        echo "La valeur du stock est de $valeurStockFormate €"."\n";
    }
}

function AReaprovisionner($tableauProduit)
{
    if (count($tableauProduit)!=0) {
        $aReaprovisionner = [];
        foreach ($tableauProduit as $reference => $produit) {
            if ($produit["Stock"] < 7) {
                $aReaprovisionner[] = $reference;
            }
        }
    }
    return $aReaprovisionner;
}
function afficheListeAReaprovisionner($tableauProduit) {
    $listeAReaprovisionner = aReaprovisionner($tableauProduit);
    if (count($listeAReaprovisionner)!=0) {
        echo "Les produits à réaprovisionner sont" ; afficheListe($listeAReaprovisionner); echo "\n";
    } else {
        echo "Il n'y a pas de produit a réapprovisionner"."\n";
    }
}
function afficheListe($liste): void
{
    if (count($liste) > 0) {
        foreach ($liste as $elem) {
            echo " $elem";
        }
    }
}
function saisirAReaprovisionner(&$tableauProduit): void
{
    if (count($tableauProduit) > 0) {
        $saisieReference = strval(readline("Saisir une référence : "));
        $saisieQuantite = intval(readline("Saisir une quantité reçue : "));
        if (array_key_exists($saisieReference,$tableauProduit)) {
            $tableauProduit[$saisieReference]["Stock"] += $saisieQuantite;
            echo "La quantité a bien été mise à jour"."\n";
        } else {
            echo "La référence n'existe pas"."\n";
        }
    }
}

$tableauProduit = [
    "P0001" => ["Designation" => "Produit 1", "Prix" => 50.99, "Stock" => 10],
    "P0002" => ["Designation" => "Produit 2", "Prix" => 99.99, "Stock" => 20],
    "P0003" => ["Designation" => "Produit 3", "Prix" => 25.50, "Stock" => 6],
    "P0004" => ["Designation" => "Produit 4", "Prix" => 130.99, "Stock" => 4],
];

echo "afficheRefDes______________________________________________________________________________________________"."\n";
afficheReferenceDesignation($tableauProduit);

echo "afficheRefDesPrix__________________________________________________________________________________________"."\n";
afficheReferenceDesignationPrix($tableauProduit);

echo "afficheAReaprovisionner____________________________________________________________________________________"."\n";
afficheListeAReaprovisionner($tableauProduit);

echo "saisirAReaprovisionner_____________________________________________________________________________________"."\n";
saisirAReaprovisionner($tableauProduit);

echo "afficheRefDes______________________________________________________________________________________________"."\n";
afficheReferenceDesignationPrix($tableauProduit);
