<?php
require_once "src/utils/recupereBDD.php";
$services = getServices()
?>

<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="services.css">
    <title>Page vitrine</title>
</head>
<body>
<?php require_once "src/utils/header.php" ?>

<div class="grilleService">
    <?php
    foreach ($services as $service) {
    ?>
    <div class="carteService">
        <img src="<?= $service["photo_service"]?>" alt="Nom du produit">
        <h1><?= $service["nom_service"]?></h1>
        <a href="#">Ajouter au panier</a>
    </div>
    <?php
    }
    ?>
</div>


<?php require_once "src/utils/footer.php" ?>
</body>
</html>
