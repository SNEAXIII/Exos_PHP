<?php
include_once "./donnees/films.php";
include_once "fonctions.php";
$listeFilms = $filmsTable;
$id = null;
$erreur = null;
if (!empty($_GET["id"])) {
    $film = chercheFilmParId($filmsTable,$_GET["id"]);
    if (!isset($film)){
        $erreur = "C'est non";
    }
} else {
    $erreur = "C'est non";
}
if (isset($erreur)) {
    echo "<h1>$erreur</h1>";
} else {
    echo "<h1>Page en cours</h1>";
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


<a href='index.php'>Retour</a>
</body>
</html>
