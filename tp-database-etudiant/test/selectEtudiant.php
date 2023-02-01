<?php

//definir les variables de connection

$host = "localhost:3306";
$baseDonnees = "db_etudiants";
$utilisateur = "root";
$motDePasse = "";

$dsn = "mysql:host=$host;dbname=$baseDonnees;charset=utf8";

//essayer de se co à la bdd db_etudiant

try {
    $connection = new PDO($dsn,$utilisateur,$motDePasse);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erreur) {
    die("Erreur : ".$erreur->getMessage());
}

//Preparation de la requete "SELECT * FROM etudiant";

$requeteSQL = "SELECT * FROM etudiant";
$requete = $connection->prepare($requeteSQL);

//Exection de la requete

$requete->execute();

//mettre en forme les résultats

$requete->setFetchMode(PDO::FETCH_ASSOC);

//recuperer les données sous forme de tableau associatif

$etudiants = $requete->fetchAll();

//affichage du résultat de la requete

if (empty($etudiants)) {
    echo("C'est vide");
} else {
    foreach ($etudiants as $etudiant) {
        echo $etudiant["prenom_etudiant"]." ".$etudiant["nom_etudiant"]." ".$etudiant["email_etudiant"]."\n";
    }
}
