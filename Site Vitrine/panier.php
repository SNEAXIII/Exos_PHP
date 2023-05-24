<?php
require_once "src/utils/recupereBDD.php";
require_once "src/utils/session.php";
require_once "src/utils/totalPrix.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $id => $prix) {
        $_SESSION["panier"][$id] = intval($prix);
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
    <link rel="stylesheet" href="panier.css">
    <title>Page vitrine</title>
</head>
<body>
<?php require_once "src/utils/header.php" ?>
<h1>PANIER</h1>
<?php
$panier = $_SESSION["panier"];
if (!empty($panier)) {
    $prixTotalArray = total($_SESSION);
    $HT = $prixTotalArray[0];
    $TTC = $prixTotalArray[1];
    foreach ($panier as $id => $prix) {
        $serviceArray = getOneService($id);
        $nom = $serviceArray["nom_service"];
        ?>
        <div class="contenair"></div>
        <h2><?= $nom ?>
            <form action="" method="post">
                <input type="number" name="<?= $id ?>" value="<?= $prix ?>">
                <button type="submit">Envoyer</button>
            </form>
        </h2>
        <?php
    }
    echo "<h2 style='margin-top: 20px'>Le cout total HT est : $HT € et le prix TTC est : $TTC €<button style='margin-left: 20px'>Valider le devis</button></h2>";
} else {
    echo "<p>Le panier est vide, vous n'avez pas selectionné de service, veuillez en selectionner au moins un et revenez sur cette page pour effectuer le devis.</p>";
}
?>
</body>
</html>