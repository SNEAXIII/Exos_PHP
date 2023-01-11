<?php
include_once "titre.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<?php afficheTitre("Cour d'introduction a PHP-Web") ?>
<p id="bienvenue">
    <i class="fa-brands fa-php"></i>Bienvenue sur le tuto du langage PHP
</p>
<i class="fa-solid fa-bars"></i><h2>Sommaire</h2>
<ul id="menu">
    <li><i class="fa-regular fa-star"></i><a href="index.php">Chaine de caractère</a></li>
    <li><i class="fa-regular fa-star"></i><a href="chaine.php">Variable</a></li>
    <li><i class="fa-regular fa-star"></i><a href="">Structures conditionelles</a></li>
    <li><i class="fa-regular fa-star"></i><a href="tableaux.php">Tableaux</a></li>
    <li><i class="fa-regular fa-star"></i><a href="page.php">Page</a></li>
</body>
</html>
