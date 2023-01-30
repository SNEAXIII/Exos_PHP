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
    <title>Des jolis étudiants</title>
</head>
<body>
<?php try ?>
<screen>
    <header>
        header
    </header>
    <section>
        <?php foreach ($students as $student) { ?>
            <article>
                <img class='card-img' src='etudiant.png' alt=''>
                <span class='name_surname_birth'><?=$student["prenom_etudiant"]?> <?=$student["nom_etudiant"]?> <?=$student["date_naissance_etudiant"]?></span>
                <a target='_blank' href='' class='card-button'>Voir plus d'informations</a>
            </article>
        <?php } ?>
    </section>
    <footer>
        footer
    </footer>
</screen>
</body>
</html>
