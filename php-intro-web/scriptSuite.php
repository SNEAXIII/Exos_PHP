<?php
$biscuits = null;
$accompagnement = null;
$erreur = null;
if (!empty($_GET["biscuits"])&&!empty($_GET["accompagnement"])) {
    $biscuits = $_GET["biscuits"];
    $accompagnement = $_GET["accompagnement"];
} else {
    $erreur = "C'est non";
}
if (isset($erreur)) {
    echo "<h1>$erreur</h1>";
    echo "<p>L'url n'est pas valide</p>";
} else {
    echo "<h1>Execution normale du script</h1>";
    echo "<p>Vous avez choisis les $biscuits avec du $accompagnement!</p>";
}
echo "<a href='page.php'>Retour</a>";