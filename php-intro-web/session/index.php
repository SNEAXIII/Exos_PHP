<?php
session_start();
print_r($_SESSION);
if (!empty($_SESSION["prenom"])) {
    $prenom = $_SESSION["prenom"];
    $produits = [
            "p1" => ["nom"=>'produit1',"prix"=>10],
            "p2" => ["nom"=>'produit2',"prix"=>20],
            "p3" => ["nom"=>'produit3',"prix"=>30],
            "p4" => ["nom"=>'produit4',"prix"=>40],
            "p5" => ["nom"=>'produit5',"prix"=>50],
    ];
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
</head>
<body>
<h1>Panier</h1>
<?php
foreach ($produits as $is=>$produit) {
    "<line></line>";
?>
    <?php
}
?>

<a href="utiliserSession.php">HEHE</a>
</body>
</html>