<?php
include_once "connexionBD.php";

function selectAllStudent():array {
    $connection = createConnection();
    $requeteSQL = "SELECT * FROM etudiant";
    $requete=$connection->prepare($requeteSQL);
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

function selectStudentById(int $id):array {
    $connection = createConnection();
    $requeteSQL = "SELECT * FROM etudiant WHERE id_etudiant = :id;";
    $requete=$connection->prepare($requeteSQL);
    $requete->bindValue(":id", $id);
    $requete->execute();
    return $requete->fetch(PDO::FETCH_ASSOC);
}