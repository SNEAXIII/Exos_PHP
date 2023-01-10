<?php
include_once "./donnees/films.php";
include_once "fonctions.php";

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
    <title>Liste des films</title>
</head>
<body>
<div class="card">
    <div class="card-header">
        <img class="card-img" src="<?php echo "./images/".$filmsTable[0]["affiche"] ?>" alt="">
    </div>
    <div class="card-body">
        <span class="card-title"><?php echo $filmsTable[0]["titre"] ?></span>
        <ul class="card-info-time">
            <li class="card-date">
                <i class="fa-solid fa-calendar-days"></i>
                <span><?php echo $filmsTable[0]["annee"] ?></span>
            </li>
            <li class="card-duration">
                <i class="fa-regular fa-clock"></i>
                <span><?php echo $filmsTable[0]["duree"] ?></span>
            </li>
        </ul>
        <span class="card-btn-detail">
            <a href="#">Voir</a>
        </span>
    </div>
</div>
</body>
</html>