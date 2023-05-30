<?php
require_once "connexionBD.php";
function creerDevis($session): int
{
    $nom = $_SESSION["client"]["nom"];
    $prenom = $_SESSION["client"]["prenom"];
    $adresse = $_SESSION["client"]["adresse"];
    $codePostal = $_SESSION["client"]["codePostal"];
    $panier = $session["panier"];

//    ajouter le devis
    $connexion = createConnection();
    $requeteSQL =
        "
            INSERT INTO `devis`(`nom_client`, `prenom_client`, `adresse_client`, `codepostal_client`, `date_devis`) 
            VALUES (:nom,:prenom,:adresse,:codePostal,now())
            ";
    $requete=$connexion->prepare($requeteSQL);
    $requete->bindValue(":nom",$nom);
    $requete->bindValue(":prenom",$prenom);
    $requete->bindValue(":adresse",$adresse);
    $requete->bindValue(":codePostal",$codePostal);
    $requete->execute();

//    recuperer l'id du devis
    $connexion = createConnection();
    $requeteSQL =
        "
        SELECT max(id_devis) as max
        FROM devis
        ";
    $requete=$connexion->prepare($requeteSQL);
    $requete->execute();
    $id_devis = $requete->fetch(PDO::FETCH_ASSOC)["max"];
//    ajouter les services dans la bdd
    foreach ($panier as $id_service=>$prix) {
        if ($id_service != 0) {
            $connexion = createConnection();
            $requeteSQL =
                "
                INSERT INTO `contenu`(`id_devis`, `id_service`, `prix`) 
                VALUES (:id_devis,:id_service,:prix)
                ";
            $requete=$connexion->prepare($requeteSQL);
            $requete->bindValue(":id_devis",$id_devis);
            $requete->bindValue(":id_service",$id_service);
            $requete->bindValue(":prix",$prix);
            $requete->execute();
        }
    }
    return $id_devis;
}
