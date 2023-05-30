<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="aPropos.css">
    <title>A propos</title>
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
    de personnel pour être en mesure de mener intégralement un projet de chantier, de la
    conception à la réalisation avec une démarche écoresponsable.
</p>

<h1>Organigramme</h1>
<div class="organigramme">
    <img src="./src/image/organigramme.png" alt="">
</div>

<h1>Réalisations</h1>
<section>
    <?php
    $liste = [
            ["Batiment locatif","src/image/batimentLocatif.jpg","Bordeaux - 2021/2023"],
            ["Maison individuelle","src/image/maison_individuelle.jpg","Lille - 2018"],
            ["Route communale","src/image/routeCommunale.png","Vallons-Pont-d'Arc - 2007"],
            ["Rénovation Autoroute A5","src/image/A5.png","Reims - 2005"],
            ["Rénovation Mairie","src/image/besac.png","Besançon - 2000"],
            ["Rénovation ENSA","src/image/ensa.png","Nancy - 1995"],
    ];
    foreach ($liste as $elem) {
    ?>
    <case>
        <h2><?= $elem[0]?></h2>
        <img class="illus" src="<?= $elem[1]?>" alt="">
        <h3><?= $elem[2]?></h3>
    </case>
    <?php
    }
    ?>
</section>

<?php require_once "src/utils/footer.php" ?>

</body>
</html>