<?php
$page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME);
$index = ["index.php", "services.php", "aPropos.php", "nousContacter.php"];
$position = array_search($page, $index);
$listeAcceuil = ["accueil", "nos services", "à propos", "nous contacter"]
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
                <li>Panier</li>
                <li>

                    <input id="recherche" type="text" placeholder="Recherche">
                    <input src="src/" type="submit" value=" ">
                </li>
            </ul>
        </ul>
    </nav>
</header>