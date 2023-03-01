<?php
include_once 'src\modele\connexionBD.php';
include_once 'src\modele\etudiantDB.php';

$listePromotions = selectAllPromotion();

//--> Faire une variable pour chaque champs (pas de liste)
$prenom = null;
$nom = null;
$adresse = null;
$dateNaissance = null;
$photo = null;
$telephone = null;
$email = null;
$erreurs = [];
//--> Si la requete est de type post, on traite les données
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "src/partial/verifieFormulaireEtudiant&ExecuteRequeteAjout.php";
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
    <link rel="stylesheet" href="forms.css">
    <link rel="stylesheet" href="main.css">
    <title>Formulaire de saisie</title>
</head>
<body>
<screen>
    <?php include_once "src/partial/header.php" ?>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">

        <label for="prenom">Prénom*</label>
        <input type="text" id="prenom" name="prenom" value="<?= $prenom?>">
        <?php if (isset($erreurs["prenom"])) {
            echo "<p class='erreur-validation'>".$erreurs["prenom"]."</p>";}?>

        <label for="nom">Nom*</label>
        <input type="text" id="nom" name="nom" value="<?= $nom?>">
        <?php if (isset($erreurs["nom"])) {
            echo "<p class='erreur-validation'>".$erreurs["nom"]."</p>";}?>

        <label for="adresse">Adresse*</label>
        <input type="text" id="adresse" name="adresse" value="<?= $adresse?>">
        <?php if (isset($erreurs["adresse"])) {
            echo "<p class='erreur-validation'>".$erreurs["adresse"]."</p>";}?>

        <label for="date-naissance">Date de naissance*</label>
        <input type="date" id="date-naissance" name="date-naissance" value="<?= $dateNaissance?>">
        <?php if (isset($erreurs["date-naissance"])) {
            echo "<p class='erreur-validation'>".$erreurs["date-naissance"]."</p>";}?>

        <label for="telephone">Telephone*</label>
        <input type="text" id="telephone" name="telephone" value="<?= $telephone?>">
        <?php if (isset($erreurs["telephone"])) {
            echo "<p class='erreur-validation'>".$erreurs["telephone"]."</p>";}?>

        <label for="email">Email*</label>
        <input type="text" id="email" name="email" value="<?= $email?>">
        <?php if (isset($erreurs["email"])) {
            echo "<p class='erreur-validation'>".$erreurs["email"]."</p>";}?>

        <label for=photo>Image* (600ko max)</label>
        <input type="file" id="photo" name="photo">
        <?php if (isset($erreurs["photo"])) {
            echo "<p class='erreur-validation'>".$erreurs["photo"]."</p>";}?>

        <label for="niveau-etude">Niveau d'étude</label>
        <select name="niveau-etude" id="niveau-etude">
            <option value="">Non renseigné</option>
            <?php
            foreach ($listePromotions as $promotion) {
                $id = $promotion["id_promotion"];
                $nom = $promotion["intitule_promotion"];
            ?>
            <option value="<?=$id?>"><?=$nom?></option>
            <?php
            }
            ?>
        </select>
        <p>* : Champs obligatoires</p>
        <input type="submit" value="Envoyer">
    </form>
</div>
</screen>
</body>
</html>