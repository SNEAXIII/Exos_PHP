<?php
include_once "connexionBD.php";
//CREATE TABLE `db_etudiants`.`promotion` (`id_promotion` INT NOT NULL AUTO_INCREMENT , `intitule_promotion` VARCHAR(20) NOT NULL , PRIMARY KEY (`id_promotion`)) ENGINE = InnoDB;
//ALTER TABLE `etudiant` ADD `id_promotion` INT NULL DEFAULT NULL AFTER `photo_etudiant`;
function selectAllStudent():array {
    $connection = createConnection();
    $requeteSQL = "SELECT * FROM etudiant";
    $requete=$connection->prepare($requeteSQL);
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}
function selectAllPromotion():array {
    $connection = createConnection();
    $requeteSQL = "SELECT intitule_promotion FROM promotion";
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
function selectStudentsByPromotion(string $promotion) : array {
    $connection = createConnection();
    $requeteSQL =
        "
    SELECT * 
    FROM etudiant as e
    INNER JOIN promotion p on e.id_promotion = p.id_promotion
    WHERE intitule_promotion = :promotion
    ";
    $requete=$connection->prepare($requeteSQL);
    $requete->bindValue(":promotion", $promotion);
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}
