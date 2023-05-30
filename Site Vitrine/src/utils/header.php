<?php
$page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME);
$index = ["index.php", "services.php", "aPropos.php"];
//$index = ["index.php", "services.php", "aPropos.php", "nousContacter.php"];
$position = array_search($page, $index);
$listeAcceuil = ["accueil", "nos services", "à propos"]
?>
<header>
    <img id="logo" alt="" src="src/image/logo_wide.png">
    <nav>
        <ul id="nav">
            <?php
            foreach($listeAcceuil as $i => $element) {
                $pageCourante = $page == $index[$i] ? 'style="color:#778899"' : "";
            ?>
                <li><a <?=$pageCourante ?> href="<?= $index[$i]?>"><?= $element ?></a></li>
            <?php
            }
            ?>
            <ul>
                <li><a <?= $page == "panier.php" ? 'style="color:#778899"' : ""?>href="panier.php">Panier</a></li>
                <li>
                    <input id="recherche" type="text" placeholder="Recherche">
                    <a target="_blank" href="https://urlz.fr/f6HL"><input src="src/" type="submit" value=" "></a>
                </li>
            </ul>
        </ul>
    </nav>
</header>