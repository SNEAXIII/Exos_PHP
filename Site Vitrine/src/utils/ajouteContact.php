<?php
require_once "connexionBD.php";
function prendContact($nom, $prenom, $adresseMail, $objet, $message)
{
    $connexion = createConnection();
    $requeteSQL =
        "
            INSERT INTO `contact`(`nom`, `prenom`, `mail`, `objet`, `message`) 
            VALUES (:nom,:prenom,:mail,:objet,:message)
            ";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> bindValue(":nom", $nom);
    $requete -> bindValue(":prenom", $prenom);
    $requete -> bindValue(":mail", $adresseMail);
    $requete -> bindValue(":objet", $objet);
    $requete -> bindValue(":message", $message);
    return $requete -> execute();
}