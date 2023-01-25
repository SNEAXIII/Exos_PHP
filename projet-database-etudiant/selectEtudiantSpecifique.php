<?php
//rechercher un étudiant par son id
//SELECT * FROM db_etudiant WHERE
include_once "src\connexionDB.php";
$requete = "SELECT * FROM etudiant WHERE prenom_etudiant='Clem'";
print_r(effectueRequete($requete,"db_etudiants"));