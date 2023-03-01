<?php
include_once 'src\modele\etudiantDB.php';
include_once 'src\utils\dates.php';
//$students = selectStudentsByPromotion("SIO_1");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $students = isset($_POST["niveau-etude"])?selectStudentsByPromotion(trim($_POST["niveau-etude"])):false;
}
?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="studentCards.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="forms.css">
    <title>Best Students</title>
</head>
<body>
<screen>
    <?php include_once "src/partial/header.php" ?>
    <form class="mini_formluaire" action="" method="post">
        <select class="select_formation" name="niveau-etude" id="niveau-etude">
            <option selected disabled hidden>Veuillez choisir une formation</option>
            <?php
            foreach (selectAllPromotion() as $promotion) {
                $id = $promotion["id_promotion"];
                $nom = $promotion["intitule_promotion"];
                ?>
                <option value="<?=$id?>"><?=$nom?></option>
                <?php
            }
            ?>
            <input class="select_formation" type="submit" value="Afficher">
    </form>
    <?php if ($students)include_once "src/partial/afficheListeEtudiant.php" ?>
</screen>
</body>
</html>