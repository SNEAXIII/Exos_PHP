<?php
include_once 'src\modele\etudiantDB.php';
include_once 'src\utils\dates.php';
$id = $_GET["id"];
try {
    $student = selectStudentById($id);
} catch (TypeError) {
    header("location: ../index.php");
}
$id_promotion = $student["id_promotion"];
$promotion = isset($id_promotion)?"Élève de ".selectPromotionById($id_promotion)["intitule_promotion"]:"Non renseignée";

?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="studentCards.css">
    <link rel="stylesheet" href="etudiant.css">
    <link rel="stylesheet" href="main.css">
    <title>Fiche étudiant</title>
</head>
<body>
<screen>
    <?php include_once "src/partial/header.php" ?>
    <h1>Détails sur l'étudiant</h1>
    <cadre>
        <img id="photo" src="db_images/<?= $student["photo_etudiant"]?>" alt="image représentant l'étudiant">
        <p>
            <span class="gras">Nom :</span> <?= $student["nom_etudiant"]?> <br><br>
            <span class="gras">Prenom :</span> <?= $student["prenom_etudiant"]?> <br><br>
            <span class="gras">Email :</span> <?= $student["email_etudiant"]?> <br><br>
            <span class="gras">Téléphone :</span> <?= $student["tel_etudiant"]?> <br><br>
            <span class="gras">Age :</span> <?= calculeAgeEtudiant($student["date_naissance_etudiant"])["age"]?> ans <br><br>
            <span class="gras">Date de naissance :</span> <?= formateDate($student["date_naissance_etudiant"])?><br><br>
            <span class="gras">Formation :</span> <?=$promotion?><br><br>
            <span class="gras">Adresse :</span> <?= $student["adresse_etudiant"]?>
        </p>
    </cadre>
</screen>
</body>
</html>
