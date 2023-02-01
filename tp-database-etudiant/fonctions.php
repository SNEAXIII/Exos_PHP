<?php
include_once 'src\modele\etudiantDB.php';
function displayStudents() : void {

    foreach (selectAllStudent() as $student) {
        displayStudent($student);
    }
}
function displayStudent(array $student) : void {
    $name = $student["prenom_etudiant"];
    $surname = $student["nom_etudiant"];
    $birth = $student["date_naissance_etudiant"];
    echo
    "
        <article>
            <img class='card-img' src='etudiant.png' alt=''>
            <div class='card-footer'>
                <span class='name_surname_birth'>$name $surname $birth</span>
                <a target='_blank' href='#' class='card-button'>Voir plus d'informations</a>
            </div class='card-header'>
        </article>
    ";
}
