<?php
include_once 'src\modele\etudiantDB.php';
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
    header
</header>
<section>
    <?php foreach ($students as $student) {
        $name = $student["prenom_etudiant"];
        $surname = $student["nom_etudiant"];
        $birth = $student["date_naissance_etudiant"];
        /*
        //    $id = $student["id_etudiant"];
        //    $email = $student["email_etudiant"];
        //    $adress = $student["adresse_etudiant"];
        //    $phone = $student["tel_etudiant"];
        */
    ?>
    <article>
        <img class='card-img' src='etudiant.png' alt=''>
        <div class='card-footer'>
            <span class='name_surname_birth'><?="$name $surname $birth"?></span>
            <a target='_blank' href='#' class='card-button'>Voir plus d'informations</a>
        </div class='card-header'>
    </article>
    <?php }?>
</section>
<footer>
    footer
</footer>
</screen>
</body>
</html>
