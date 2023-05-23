<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="aPropos.css">
    <title>Page vitrine</title>
</head>
<body>

<?php require_once "src/utils/header.php" ?>

<h1>Notre Histoire</h1>
<p class="text">
    Née de l’association entre un architecte et un ingénieur, cette entreprise a vu le jour le 15
    juin 1984. À ses débuts, depuis 1980, les associés concevaient des projets de bâtiments en tant
    que prestataires externes. Il leur était impossible de mener à bien un quelconque chantier ne
    disposant pas d’ouvriers. Après avoir effectué une dizaine de contrats et constitué une épargne
    importante, les deux entrepreneurs ont décidé d’investir dans un local et d'embaucher quelques
    employés afin de réaliser leurs premiers chantiers. Forts de leur succès, ils ont décidé de fonder
    leur entreprise de BTP nommée ÆRIS BTP en 1984 à Tours avec de plus grands locaux et plus
    de personnel afin d’être en mesure de mener intégralement un projet de chantier, de la
    conception à la réalisation avec une démarche écoresponsable.
</p>

<h1>Organigramme</h1>
<div class="organigramme">
    <img src="./src/image/organigramme.png" alt="">
</div>

<h1>Réalisations</h1>
<section>
    <case>
        <h2>Batiment locatif</h2>
        <img class="illus" src="src/image/batimentLocatif.jpg" alt="">
        <h3>Bordeaux - 2021/2023</h3>
    </case>
    <case>
        <h2>Nouvelle mairie</h2>
        <img class="illus" src="src/image/realisation2.jpg" alt="">
        <h3>Meilleraie-Tillay - 2018</h3>
    </case>
</section>

<?php require_once "src/utils/footer.php" ?>

</body>
</html>