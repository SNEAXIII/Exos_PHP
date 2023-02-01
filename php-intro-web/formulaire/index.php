<!doctype html>
<?php
//--> Faire une variable pour chaque champs (pas de liste)
$rue = null;
$codePostal = null;
$ville = null;
$erreurs = [];

//--> Si la requete est de type post, on traite les données
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $rue = $_POST["rue"];
//    $codePostal = $_POST["code-postal"];
//    $ville = $_POST["ville"];
//    echo "$rue $codePostal $ville";
//    -->Tester si tout les champs obligatoire sont saisis

    if (empty($_POST["rue"])) {
        $erreurs["rue"] = "La rue est obligatoire";
    } else {
        $rue = $_POST["rue"];
    }

    if (empty($_POST["code-postal"])) {
        $erreurs["code-postal"] = "Le code postal est obligatoire";
    } else {
        $codePostal = $_POST["code-postal"];
    }

    if (empty($_POST["ville"])) {
        $erreurs["ville"] = "La ville est obligatoire";
    } else {
        $ville = $_POST["ville"];
    }
    if (empty($erreurs)) {
//        -->Inserer dans la bdd

//        -->Faire la redirection
        header("location: ../index.php");
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
    <title>Formulaire</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">

            <label for="rue">Rue*</label>
            <input type="text" id="rue" name="rue" value="<?= $rue?>">
            <?php
            if (isset($erreurs["rue"])) {
                echo "<p class='erreur-validation'>".$erreurs["rue"]."</p>";
            }?>
            <label for="code-postal">Code Postal*</label>
            <input type="text" id="code-postal" name="code-postal" value="<?= $codePostal?>">
            <?php
            if (isset($erreurs["code-postal"])) {
                echo "<p class='erreur-validation'>".$erreurs["code-postal"]."</p>";
            }?>
            <label for="ville">Ville*</label>
            <input type="text" id="ville" name="ville" value="<?= $ville?>">
            <?php
            if (isset($erreurs["ville"])) {
                echo "<p class='erreur-validation'>".$erreurs["ville"]."</p>";
            }
            ?>
            <p>* : Champs obligatoires</p>
            <input type="submit" value="Envoyer">
        </form>
    </div>
</body>
</html>
