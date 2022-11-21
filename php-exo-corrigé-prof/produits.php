<?php

$produits = [
  'P0001' => ['designation' => "Produit 1", 'prix' => 50.99, 'stock' => 10],
  'P0002' => ['designation' => "Produit 2", 'prix' => 99.99, 'stock' => 20],
  'P0003' => ['designation' => "Produit 3", 'prix' => 25.50, 'stock' => 6],
  'P0004' => ['designation' => "Produit 4", 'prix' => 130.99, 'stock' => 4],
];

// Affichage de la référence et de la désignation de chaque produit
foreach ($produits as $idProduit => $produit) {
    echo $idProduit . " : " . $produit['designation'] . PHP_EOL;
}

// Calcul et affichage de la valeur du stock
$valeurStock = 0;
foreach ($produits as $idProduit => $produit) {
    $valeurStock += $produit['prix'] * $produit['stock'];
}
echo "La valeur du stock est de " . number_format($valeurStock,2,',',' ');

// Produits à réapprovisionner (quantité en stock inférieure à 7)
$produitsApprovisionnes = [];
foreach ($produits as $idProduit => $produit) {
    if ($produit['stock'] < 7) {
        $produitsApprovisionnes[] = $idProduit;
    }
}
echo PHP_EOL;
print_r($produitsApprovisionnes);

// Approvisionner un produit
$reference = readline("Saisir une référence : " );
if (!array_key_exists($reference,$produits)) {
    echo "La référence n'existe pas !";
} else {
    $quantite = readline("Saisir une quantité reçue : ");
    $produits[$reference]['stock'] = $produits[$reference]['stock'] + $quantite;
    echo "La quantité a bien été mise à jour !";
}




