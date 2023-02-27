<?php
// Creer une session
// ATTENTION: en 1er seulement
session_start();
$_SESSION["prenom"] = "Alexis";
$_SESSION["nom"] = "Bassigonot";
$_SESSION["p1"] = "Produit 1";
$_SESSION["p2"] = "Produit 2";
$_SESSION["majeur"]= true;
$_SESSION["utilisateur"] = "utilisateur";
$_SESSION["panier"] = [];
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Session</h1>
<p>Ce script permet de creer une nouvelle session</p>
<a href="utiliserSession.php">HEHE</a>
</body>
</html>