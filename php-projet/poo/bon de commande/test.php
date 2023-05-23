<?php
require_once "./src/class/main.php";

// Création d'un client
$client = new Client(1, 'Lefebvre', '1 rue de la Paix', '59000', 'Lille', '0320000000');
// Création de 5 produits
$produit1 = new Produit(1, 'Clavier', 10, 20, 'pcs');
$produit2 = new Produit(2, 'Souris', 5, 20, 'pcs');
$produit3 = new Produit(3,"Ecran",380,20,"pcs");

// Création d'une commande
$commande = new Commande(1, new DateTime(), $client);

// Ajout de 2 lignes de commande
$commande -> ajouterProduit($produit1, 2);
$commande -> ajouterProduit($produit2, 1);
//$commande -> ajouterProduit($produit3, 1);

// Editer la commande
$commande -> editer();