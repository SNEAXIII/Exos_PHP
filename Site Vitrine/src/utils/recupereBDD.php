<?php
require_once "connexionBD.php";

function getServices():array {


    $connexion = createConnection();
    $requeteSQL = "Select * From service";
    $requete = $connexion->prepare($requeteSQL);
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

