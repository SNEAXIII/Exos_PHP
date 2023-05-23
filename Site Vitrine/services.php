<?php
require_once "src/utils/recupereBDD.php";
require_once "src/utils/session.php";
$services = getServices();
$idService = [];
foreach ($services as $service) {
    $idService[] = $service["id_service"];
}
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (array_key_exists($id, $idService) and !array_key_exists($id,$_SESSION["panier"]) ) {
        $_SESSION["panier"][$id] = 0;

    }
}

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
            <img src="<?= $service["photo_service"] ?>" alt="Nom du produit">
            <h1><?= $service["nom_service"] ?></h1>
            <a href="services.php?id=<?= $service["id_service"] ?>">Ajouter au panier</a>
        </div>
        <?php
    }
    ?>
</div>


<?php require_once "src/utils/footer.php" ?>
</body>
</html>
