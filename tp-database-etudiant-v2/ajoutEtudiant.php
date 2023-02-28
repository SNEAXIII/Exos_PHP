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
//    -->Tester si tout les champs obligatoire sont saisis
    if (empty(trim($_POST["nom"])))
    {$erreurs["nom"] = "Le nom est obligatoire";}
    else
    {$nom = trim($_POST["nom"]);}

    if (empty(trim($_POST["prenom"])))
    {$erreurs["prenom"] = "Le prénom est obligatoire";}
    else
    {$prenom = trim($_POST["prenom"]);}

    if (empty(trim($_POST["adresse"])))
    {$erreurs["adresse"] = "L'adresse est obligatoire";}
    else
    {$adresse = trim($_POST["adresse"]);}

    if (empty(trim($_POST["telephone"])))
    {$erreurs["telephone"] = "Le numéro de téléphone est obligatoire";}
    else
    {$telephone = trim($_POST["telephone"]);}

    if (empty(trim($_POST["email"])))
    {$erreurs["email"] = "L'adresse email est obligatoire";}
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
    {$erreurs["email"] = "L'adresse email n'est pas valide";}
    else
    {$email = trim($_POST["email"]);}

    if (empty(trim($_POST["date-naissance"])))
    {$erreurs["date-naissance"] = "La date de naissance est obligatoire";}
    else
    {$dateNaissance = trim($_POST["date-naissance"]);}

    if (array_key_exists(trim($_POST["niveau-etude"]),$listePromotions)) {
        $formation = trim($_POST["niveau-etude"]);
    } else {
        $formation = "";
    }
    if (empty($_FILES["photo"]["name"]))
    {$erreurs["photo"] = "La photo est obligatoire";}
    else
    {
        $nomFichier = $_FILES["photo"]["name"];
        $typeFichier = $_FILES["photo"]["type"];
        $tmpFichier = $_FILES["photo"]["tmp_name"];
        $tailleFichier = $_FILES["photo"]["size"];
//        -->Teste si le fichier est une image
        if (($typeFichier != "image/jpeg")&&($typeFichier!="image/png")) {
            $erreurs["photo"] = "Le fichier n'est pas une image";
        } else {
            $nomFichierRandomise = uniqid().".".pathinfo($nomFichier,PATHINFO_EXTENSION);
            if ($tailleFichier > 600*1024) {
                $erreurs["photo"] = "L'image est trop lourde, le maximum est 600ko";
            } elseif (!move_uploaded_file($tmpFichier,"./db_images/$nomFichierRandomise")) {
                $erreurs["photo"] = "Le fichier n'a pas pu être enregistré";
            }
        }
    }
    if (empty($erreurs)) {
//        -->Inserer dans la bdd
        $connection = createConnection();
        $champFormation = !empty($formation)?", id_promotion":"";
        $valueFormation = !empty($formation)?", :id_promotion":"";
        $requeteSQL =
            "
            INSERT INTO etudiant (prenom_etudiant, nom_etudiant, date_naissance_etudiant, adresse_etudiant, photo_etudiant$champFormation) 
            VALUES (:prenom, :nom, :dateNaissance, :adresse, :photo$valueFormation);
            ";
        $requete=$connection->prepare($requeteSQL);
        $requete->bindValue(":prenom", $prenom);
        $requete->bindValue(":nom", $nom);
        $requete->bindValue(":dateNaissance", $dateNaissance);
        $requete->bindValue(":adresse", $adresse);
        $requete->bindValue(":photo", $nomFichierRandomise);
        if (!empty($formation)) {
            $requete->bindValue(":id_promotion", $formation);
        }
        $requete->execute();
//        -->Faire la redirection
        header("location: ../index.php");
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
    <link rel="stylesheet" href="forms.css">
    <link rel="stylesheet" href="main.css">
    <title>Formulaire</title>
</head>
<body>
<screen>
    <?php include_once "header.php"?>
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
            foreach ($listePromotions as $id => $promotion) {
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
