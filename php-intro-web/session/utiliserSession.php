<?php
//Acceder a la session
session_start();
print_r($_SESSION);
if (!empty($_SESSION["prenom"])) {
    $prenom = $_SESSION["prenom"];
}
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
<h1>Utiliser une variable</h1>
<p>Ce script permet de creer une nouvelle session</p>
<a href="creerSession.php">HEHE</a>
<a href="index.php">index</a>
<p><?= isset($prenom)?"Bonjour $prenom":"Vous n'avez pas saisis de prénom" ?></p>
</body>
</html>