<?php
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $message = $_GET["type"] ==  "devis" ? "Le devis numéro ".$_GET["id"]." a été créé avec succès." : "Le message a été envoyé avec succès";
}
?>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="redirection.css">
    <title>Page vitrine</title>
</head>
<body>
<?php require_once "src/utils/header.php" ?>
<h1><?= $message?><br><br><a href="index.php">Retourner sur la page d'accueil</a></h1>
</body>
</html>