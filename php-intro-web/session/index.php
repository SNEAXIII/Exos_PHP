<?php
session_start();
//print_r($_SESSION);
if (!empty($_SESSION["prenom"])) {
    $prenom = $_SESSION["prenom"];
    $produits = [
            "p1" => ["nom"=>'produit1',"prix"=>10],
            "p2" => ["nom"=>'produit2',"prix"=>20],
            "p3" => ["nom"=>'produit3',"prix"=>30],
            "p4" => ["nom"=>'produit4',"prix"=>40],
            "p5" => ["nom"=>'produit5',"prix"=>50],
    ];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION["panier"])) {
        $_SESSION["panier"] = [];
    }
    if (!empty(trim($_POST["produit-id"]))) {
        $id = trim($_POST["produit-id"]);
        if (isset($_SESSION["panier"][$id])) {
            $_SESSION["panier"][$id]["quantitee"] += 1;
        } else {
            $_SESSION["panier"][$id]["nom"] = $produits[$id]["nom"];
            $_SESSION["panier"][$id]["prix"] = $produits[$id]["prix"];
            $_SESSION["panier"][$id]["quantitee"] = 1;
        }
    }
    print_r($_SESSION["panier"]);
}
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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Panier</h1>
<ul>
    <?php
    foreach ($produits as $id=>$produit) {
        $libelle = $produit["nom"];
        $prix = $produit["prix"];
    ?>
        <li>
            <?=$libelle?> <?=$prix?>€<form action="" method="post"><input type="hidden" name="produit-id" value="<?=$id?>"><button type="submit">Ajouter au panier</button>
            </form>
        </li>
    <?php
    }
    ?>
</ul>


<a href="utiliserSession.php">HEHE</a>
</body>
</html>