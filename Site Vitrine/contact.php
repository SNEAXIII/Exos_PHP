<?php
require_once "src/utils/ajouteContact.php";
$tab = [
    "nom" => "",
    "prenom" => "",
    "adresseMail" => "",
    "objet" => "",
    "message" => ""
];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $erreurs = [];
    foreach ($_POST as $id => $value) {
        if ($value == null) {
            $erreurs[$id] = "Il faut renseigner le champ suivant : $id";
            $tab[$id]= "";
        } else {
            $tab[$id]= $value;
        }
    }
    if (count($erreurs) == 0) {
        if (prendContact(
            $_POST["nom"],
            $_POST["prenom"],
            $_POST["adresseMail"],
            $_POST["objet"],
            $_POST["message"]
        )) {header("location: redirection.php?type=contact");}
    }
}

?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="contact.css">
    <title>Contact</title>
</head>
<body>
<?php require_once "src/utils/header.php" ?>
<h1>Prendre Contact</h1>
<form method="POST">
    <div class="nomPrenom">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
    </div>

    <div class="mailObjet">
        <label for="adresse">Adresse Mail :</label>
        <input type="text" id="adresseMail" name="adresseMail" required>

        <label for="objet">Objet :</label>
        <input type="text" id="objet" name="objet" required>
    </div>

    <label for="message">Message :</label>
    <textarea class="message" id="message" name="message" rows="5" cols="33"></textarea>

    <button type="submit">Confirmer</button>
</form>
</body>
</html>