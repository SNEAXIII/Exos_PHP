<?php
include_once 'src\modele\etudiantDB.php';
include_once 'src\utils\dates.php';
$students = selectAllStudent();
?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="studentCards.css">
    <link rel="stylesheet" href="main.css">
    <title>Best Students</title>
</head>
<body>
<screen>
    <?php include_once "src/partial/header.php" ?>
    <h1>Liste de nos étudiants</h1>
    <?php include_once "src/partial/afficheListeEtudiant.php" ?>
</screen>
</body>
</html>