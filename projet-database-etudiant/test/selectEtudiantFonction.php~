<?php
include_once '..\src\modele\etudiantDB.php';

$etudiants = selectAllStudent();
if (empty($etudiants)) {
    echo("C'est vide");
} else {
    foreach ($etudiants as $etudiant) {
        echo $etudiant["prenom_etudiant"]." ".$etudiant["nom_etudiant"]." ".$etudiant["email_etudiant"]."\n";
    }
}
$etudiants = selectStudentById(3);
if (empty($etudiants)) {
    echo("C'est vide");
} else {
    foreach ($etudiants as $etudiant) {
        echo $etudiant."";
    }
}