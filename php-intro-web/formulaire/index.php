<!doctype html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rue = $_POST["rue"];
    $codePostal = $_POST["code-postal"];
    $ville = $_POST["ville"];
    echo "$rue $codePostal $ville";
}
?>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Formulaire</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="rue">Rue</label>
            <input type="text" id="rue" name="rue">
            <label for="code-postal">Code Postal</label>
            <input type="text" id="code-postal" name="code-postal">
            <label for="ville">Ville</label>
            <input type="text" id="ville" name="ville">
            <input type="submit" value="Envoyer">
        </form>
    </div>
</body>
</html>
