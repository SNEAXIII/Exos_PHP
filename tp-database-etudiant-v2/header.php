<?php
$listeFichiers = [
        "index.php" => "Accueil",
        "vueFiltree.php" => "Formations",
        "ajoutEtudiant.php" => "nouvel étudiant",
        "contact.php" => "Contact",
]
?>
<header>
    <img id="logo" src="logo-BS.png" alt="logo">
    <nav>
<?php
foreach ($listeFichiers as $nomFichier => $label) {
    $couleur = basename($_SERVER['PHP_SELF']) == $nomFichier?"itemActuel":"itemNonActuel";
?>
    <a href="<?=$nomFichier?>" class="<?=$couleur?> item"><?=$label?></a>
<?php
}
?>
    </nav>
</header>
    
