<?php
require_once "src/utils/recupereBDD.php";
require_once "src/utils/session.php";
require_once "src/utils/totalPrix.php";
$panierVide = "<p>Le panier est vide, vous n'avez pas encore selectionné de service, veuillez en selectionner au moins un et revenez sur cette page pour effectuer le devis.</p>";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
    // methode frauduleuse pour acceder au 1er element de mon tableau associatif
    if (count($_POST) == 4) {
        $_SESSION["client"]["nom"] = trim($_POST["nom"]);
        $_SESSION["client"]["prenom"] = trim($_POST["prenom"]);
        $_SESSION["client"]["adresse"] = trim($_POST["adresse"]);
        $_SESSION["client"]["codePostal"] = trim($_POST["codePostal"]);

    } elseif (array_key_exists("confirmerDevis",$_POST)) {
        echo "test";
    } else {
        foreach ($_POST as $id => $prix) {
            $idParse = intval($id);
            $prix = round(floatval($prix), 4);
            if (array_key_exists($idParse, $_SESSION["panier"])) {
                if (str_ends_with($id, "del")) {
                    unset($_SESSION["panier"][$idParse]);
                } else {
                    $_SESSION["panier"][$id] = max($prix, 0);
                }
            }
        }
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
if (count($panier) != 1) {
    require_once "src/utils/formulaire.php";
    list($HT, $TTC) = total($_SESSION, .2);
    foreach ($panier as $id => $prix) {

        if ($id != 0) {

            $serviceArray = getOneService($id);
            $nom = $serviceArray["nom_service"];
            ?>
            <div class="contenair">
                <h2><?= $nom ?></h2>
                <div class="actions">
                    <form action="" method="post">
                        <button type="submit" name="<?= $id ?>del">Supprimer</button>
                    </form>
                    <form action="" method="post">
                        <input type="text" name="<?= $id ?>" value="<?= $prix ?>">
                        <button type="submit">Envoyer</button>
                    </form>
                </div>

            </div>
            <?php
        }
    }
    echo "
        <h2 style='margin-top: 90px'>
            Le prix HT est : $HT € et le prix TTC est : $TTC €
            <form action='' method='post'>
                <button type='submit' name='confirmerDevis' style='margin-left: 20px'>Valider le devis</button>
            </form>
        </h2>";
} else {
    echo $panierVide;
}
?>
</body>
</html>