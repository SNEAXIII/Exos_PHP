<?php
require_once "connexionBD.php";
function ajouteDevis($session):void {
    $connexion = createConnection();
    $requeteSQL = "INSERT INTO `devis`(`nom_client`, `prenom_client`, `adresse_client`, `codepostal_client`, `date_devis`) VALUES ('Bassignot','Alexis','12 rue du coucous','25000',CURRENT_TIMESTAMP);";
    $requete = $connexion->prepare($requeteSQL);
    $requete->execute();
    
    foreach ($session["panier"] as $id_service => $prix_service) {
        $requeteSQL = "INSERT INTO `contenu`(`id_devis`, `id_service`, `prix`) VALUES (:id_devis,:id_service,:prix)";
        $requete = $connexion->prepare($requeteSQL);
        $requete->bindValue(":id_devis",$id_service);
        $requete->bindValue()
        $requete->bindValue()
    }
}
