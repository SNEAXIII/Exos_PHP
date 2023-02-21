<?php
$categoriesed = ["Aucune","EPS","SES","HG","NSI","MATHS","ES","EMC"];
$categories = [];
$i=0;
foreach ($categoriesed as $cat) {
    $categories[] = ["id"=>$i,"categorie"=>$cat];
    $i++;
}

if ($_SERVER["REQUEST_METHOD"] === 'POST'){
    $categorie = $_POST["categorie"];
//    if (!empty($categorie)) {
//        echo $categorie;
//    } else {
//        echo "Rien n'est select ds le tab 1";
//    }
    if (isset($_POST["categories"])) {
        $categoriesPost = $_POST["categories"];
        print_r($categoriesPost);
    } else {
        echo "pas de val select";
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Liste déroulante</title>
</head>
<body>
<container>
    <form-container>
        <div class="box-pp"><img id="pp" src="pp.png" alt="hehe"></div>
        <h1>Catégorie</h1>
        <form method="post">
            <label for="categorie">Catégorie stat</label>
            <select name="categorie" id="categorie">
                <option value="">Aucune</option>
                <option value="1">EPS</option>
                <option value="2">SES</option>
                <option value="3">HG</option>
                <option value="4">NSI</option>
                <option value="5">MATHS</option>
                <option value="6">ES</option>
                <option value="7">FR</option>
                <option value="8">EMC</option>
            </select>
            <label for="categorie">Catégorie dyna</label>
            <select name="categorie2" id="categorie2">
                <?php foreach ($categories as $categorie) {?>
                    <option value="<?= $categorie["id"]?>"><?= $categorie["categorie"]?></option>
                <?php }?>
            </select>
            <label for="categorie3">Catégorie dyna multiple</label>
            <select name="categories[]" id="categorie3" multiple size="<?= count($categories) ?>">
                <?php foreach ($categories as $categorie) {?>
                    <option value="<?= $categorie["id"]?>"><?= $categorie["categorie"]?></option>
                <?php }?>
            </select>
            <input type="submit" value="Valider">
        </form>
    </form-container>
</container>
</body>
</html>
