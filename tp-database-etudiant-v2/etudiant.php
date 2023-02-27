<?php
include_once 'src\modele\etudiantDB.php';
$id = $_GET["id"];
try {
    $student = selectStudentById($id);
} catch (TypeError) {
    header("location: ../index.php");
}

?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="etudiant.css">
    <link rel="stylesheet" href="main.css">
    <title>Fiche étudiant</title>
</head>
<body>
<screen>
    <?php include_once "header.php"?>
    <h1>Détails sur l'étudiant</h1>
    <cadre>
        <img id="photo" src="db_images/<?= $student["photo_etudiant"]?>" alt="image représentant l'étudiant">
        <p>
            <span class="sousligne">Nom :</span> <?= $student["nom_etudiant"]?> <br><br>
            <span class="sousligne">Prenom :</span> <?= $student["prenom_etudiant"]?> <br><br>
            <span class="sousligne">Email :</span> <?= $student["email_etudiant"]?> <br><br>
            <span class="sousligne">Téléphone :</span> <?= $student["tel_etudiant"]?> <br><br>
            <span class="sousligne">Date de naissance :</span> <?= $student["date_naissance_etudiant"]?><br><br>
            <span class="sousligne">Adresse :</span> <?= $student["adresse_etudiant"]?> <br><br>
        </p>
    </cadre>
</screen>
</body>
</html>
