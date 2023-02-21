<?php
include_once 'src\modele\connexionBD.php';
//--> Faire une variable pour chaque champs (pas de liste)
$prenom = null;
$nom = null;
$adresse = null;
$dateNaissance = null;
$photo = null;
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

    if (empty(trim($_POST["date-naissance"])))
    {$erreurs["date-naissance"] = "La date de naissance est obligatoire";}
    else
    {$dateNaissance = trim($_POST["date-naissance"]);}

    if (empty($_FILES["photo"]["name"]))
    {$erreurs["photo"] = "La photo est obligatoire";}
    else
    {
        $nomFichier = $_FILES["photo"]["name"];
        $typeFichier = $_FILES["photo"]["type"];
        $tmpFichier = $_FILES["photo"]["tmp_name"];
        $tailleFichier = $_FILES["photo"]["size"];
//        -->Teste si le fichier est une image
        if (!str_contains($typeFichier,"image")) {
            $erreurs["photo"] = "Le fichier n'est pas une image";
        } else {
            $nomFichierRandomise = uniqid().".".pathinfo($nomFichier,PATHINFO_EXTENSION);
            if ($tailleFichier > 1000*1024) {
                $erreurs["photo"] = "L'image est trop lourde";
            } elseif (!move_uploaded_file($tmpFichier,"./db_images/$nomFichierRandomise")) {
                $erreurs["photo"] = "Le fichier n'a pas pu être enregistré";
            }
        }
    }
    if (empty($erreurs)) {
//        -->Inserer dans la bdd
        $connection = createConnection();
        $requeteSQL = "INSERT INTO etudiant (prenom_etudiant, nom_etudiant, date_naissance_etudiant, adresse_etudiant, photo_etudiant) VALUES (:prenom, :nom, :dateNaissance, :adresse, :photo);";
        $requete=$connection->prepare($requeteSQL);
        $requete->bindValue(":prenom", $prenom);
        $requete->bindValue(":nom", $nom);
        $requete->bindValue(":dateNaissance", $dateNaissance);
        $requete->bindValue(":adresse", $adresse);
        $requete->bindValue(":photo", $nomFichierRandomise);
        $requete->execute();
//        -->Faire la redirection
        header("location: ../index.php");
//        echo $prenom , $nom, $dateNaissance, $adresse, $nomFichierRandomise;
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
    <title>Formulaire</title>
</head>
<body>
<screen>
<header>
    <img id="logo" src="logo-BS.png" alt="logo">
    <nav>
        <a href="index.php" class="itemNonActuel item">Accueil</a>
        <a href="ajoutEtudiant.php" class="itemActuel item">nouvel étudiant</a>
        <a href="contact.php" class="itemNonActuel item">Contact</a>
    </nav>
</header>
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

        <label for="date-naissance">Date de naissance* (sous la forme année-mois-jour)</label>
        <input type="text" id="date-naissance" name="date-naissance" value="<?= $dateNaissance?>">
        <?php if (isset($erreurs["date-naissance"])) {
            echo "<p class='erreur-validation'>".$erreurs["date-naissance"]."</p>";}?>

        <input type="file" id="photo" name="photo">
        <?php if (isset($erreurs["photo"])) {
            echo "<p class='erreur-validation'>".$erreurs["photo"]."</p>";}?>
        <p>* : Champs obligatoires</p>
        <input type="submit" value="Envoyer">
    </form>
</div>
</screen>
</body>
</html>
