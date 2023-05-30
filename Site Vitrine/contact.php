<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
<!--    <link rel="stylesheet" href="panier.css">-->
    <title>Contact</title>
</head>
<body>
<?php require_once "src/utils/header.php" ?>
<h1>Prendre Contact</h1>
<form method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="adresse">Adresse Mail:</label>
    <input type="text" id="adresseMail" name="adresseMail" required>

    <label for="codePostal">Code postal :</label>
    <input type="text" id="codePostal" name="codePostal" required>

    <button type="submit">Confirmer</button>
</form>
</body>
</html>