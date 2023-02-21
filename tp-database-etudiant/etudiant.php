<?php
include_once 'src\modele\etudiantDB.php';
$id = $_GET["id"];
$student = selectStudentById($id);
?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Fiche étudiant</title>
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
    <section>
        <article>
            <img class='card-img' src='src/img/etudiant.png' alt=''>
            <span class='name_surname_birth'><?=$student["prenom_etudiant"]?> <?=$student["nom_etudiant"]?> <?=$student["date_naissance_etudiant"]?></span>
            <a target='_blank' href='' class='card-button'>Voir plus d'informations</a>
        </article>
    </section>
    <footer>
        footer
    </footer>
</screen>
</body>
</html>
