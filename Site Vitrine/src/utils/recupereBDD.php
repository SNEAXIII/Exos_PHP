<?php
require_once "connexionBD.php";

function getServices():array {
    $connexion = createConnection();
    $requeteSQL = "Select * From service";
    $requete = $connexion->prepare($requeteSQL);
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}
function getOneService($id):array {
    $connexion = createConnection();
    $requeteSQL = "Select * From service where id_service = :id";
    $requete = $connexion->prepare($requeteSQL);
    $requete->bindValue(":id",$id);
    $requete->execute();
    return $requete->fetch(PDO::FETCH_ASSOC);
}

