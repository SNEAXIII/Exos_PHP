<?php
include_once 'src\modele\etudiantDB.php';
include_once 'src\utils\dates.php';
$students = selectAllStudent();
?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Des jolis étudiants</title>
</head>
<body>
<screen>
<header>
    <img id="logo" src="logo-BS.png" alt="logo">
    <nav>
        <a href="index.php" class="itemActuel item">Accueil</a>
        <a href="ajoutEtudiant.php" class="itemNonActuel item">nouvel étudiant</a>
        <a href="contact.php" class="itemNonActuel item">Contact</a>
    </nav>
</header>
<h1 style="border-bottom: solid 1px black">Voici la liste de nos étudiants</h1>
<section>
    <?php foreach ($students as $student) {
        $photo = $student["photo_etudiant"];
        $name = $student["prenom_etudiant"];
        $surname = $student["nom_etudiant"];
        $birth = formateDate($student["date_naissance_etudiant"]);
        $tableauAge = calculeAgeEtudiant($student["date_naissance_etudiant"]);
        $age = $tableauAge["age"];
        $color = $tableauAge["couleur"] ;
        ?>
        <article>
            <img class='card-img' src='db_images/<?=$photo ?>' alt=''>
            <span class='surname'><?="$surname"?></span>
            <span class='name'><?="$name"?></span>
            <span class='birth'><?="$birth"?></span>
            <span class='age' style="color: <?="$color"?>"><?="$age"?> ans</span>
            <a href='./etudiant.php?id=<?= $student["id_etudiant"]?>' class='card-button'>Voir plus d'informations</a>
        </article>
    <?php }?>
</section>
</screen>
</body>
</html>