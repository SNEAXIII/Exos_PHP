<?php
require_once "src/utils/recupereBDD.php";
require_once "src/utils/session.php";
?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="panier.css">
    <title>Page vitrine</title>
</head>
<body>

    <?php require_once "src/utils/header.php" ?>
    <h1>PANIER</h1>
    <?php
    $panier = $_SESSION["panier"];
    if (!empty($panier)) {
        foreach ($panier as $id => $prix) {
            $serviceArray = getOneService($id);
            $nom = $serviceArray["nom_service"];
    ?>
        <div class="contenair"></div>
            <h2><?= $nom?> <input type="number" name="prix" placeholder="<?= $prix?>"></h2>
            <?php
        }
    } else {
        echo "<p>Le panier est vide, vous n'avez pas selectionné de service, veuillez en selectionner au moins un et revenez sur cette page pour effectuer le devis.</p>";
    }
    ?>


</body>
</html>
