<?php
//    -->Tester si tout les champs obligatoire sont saisis
if (empty(trim($_POST["nom"]))) {
    $erreurs["nom"] = "Le nom est obligatoire";
} else {
    $nom = trim($_POST["nom"]);
}

if (empty(trim($_POST["prenom"]))) {
    $erreurs["prenom"] = "Le prénom est obligatoire";
} else {
    $prenom = trim($_POST["prenom"]);
}

if (empty(trim($_POST["adresse"]))) {
    $erreurs["adresse"] = "L'adresse est obligatoire";
} else {
    $adresse = trim($_POST["adresse"]);
}

if (empty(trim($_POST["telephone"]))) {
    $erreurs["telephone"] = "Le numéro de téléphone est obligatoire";
} else {
    $telephone = trim($_POST["telephone"]);
}

if (empty(trim($_POST["email"]))) {
    $erreurs["email"] = "L'adresse email est obligatoire";
} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $erreurs["email"] = "L'adresse email n'est pas valide";
} else {
    $email = trim($_POST["email"]);
}

if (empty(trim($_POST["date-naissance"]))) {
    $erreurs["date-naissance"] = "La date de naissance est obligatoire";
} else {
    $dateNaissance = trim($_POST["date-naissance"]);
}

$formation = trim($_POST["niveau-etude"]);

if (empty($_FILES["photo"]["name"])) {
    $erreurs["photo"] = "La photo est obligatoire";
} else {
    $nomFichier = $_FILES["photo"]["name"];
    $typeFichier = $_FILES["photo"]["type"];
    $tmpFichier = $_FILES["photo"]["tmp_name"];
    $tailleFichier = $_FILES["photo"]["size"];
//        -->Teste si le fichier est une image
    if (($typeFichier != "image/jpeg") && ($typeFichier != "image/png")) {
        $erreurs["photo"] = "Le fichier n'est pas une image";
    } else {
        $nomFichierRandomise = uniqid() . "." . pathinfo($nomFichier, PATHINFO_EXTENSION);
        if ($tailleFichier > 600 * 1024) {
            $erreurs["photo"] = "L'image est trop lourde, le maximum est 600ko";
        } elseif (!move_uploaded_file($tmpFichier, "./db_images/$nomFichierRandomise")) {
            $erreurs["photo"] = "Le fichier n'a pas pu être enregistré";
        }
    }
}
if (empty($erreurs)) {
//        -->Inserer dans la bdd
    $connection = createConnection();
    $requeteSQL =
        "
INSERT INTO etudiant (prenom_etudiant, nom_etudiant, date_naissance_etudiant, adresse_etudiant, photo_etudiant, id_promotion)
VALUES (:prenom, :nom, :dateNaissance, :adresse, :photo, :id_promotion);
";
    $requete = $connection -> prepare($requeteSQL);
    $requete -> bindValue(":prenom", $prenom);
    $requete -> bindValue(":nom", $nom);
    $requete -> bindValue(":dateNaissance", $dateNaissance);
    $requete -> bindValue(":adresse", $adresse);
    $requete -> bindValue(":photo", $nomFichierRandomise);
    if (empty($formation))$formation = null;
    $requete -> bindValue(":id_promotion", $formation);
    $requete -> execute();
//        -->Faire la redirection
    header("location: ../index.php");
}
?>