<?php
$page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME);
$index = ["index.php", "service.php", "aPropos.php", "nousContacter.php"];
$position = array_search($page, $index);
$listeAcceuil = ["accueil", "nos services", "à propos", "nous contacter"]
?>
<header>
    <img id="logo" alt="" src="src/image/logo_wide.png">
    <nav>
        <ul id="nav">
            <?php
            for($i=0;$i<=count($listeAcceuil);$i++) {
                $pageCourante = $page == $index[$i] ? 'style="color:#90f1ef"' : "";
                $element = array_search($listeAcceuil[$i], $index);
            ?>
                <li <?= $pageCourante ?>><?= $element ?></li>
            <?php
            }
            ?>
            <ul>
                <li>Inscription</li>
                <li>connexion</li>
                <li>
                    <input id="recherche" type="text" placeholder="Recherche">
                    <input src="src/" type="submit" value=" ">
                </li>
            </ul>
        </ul>
    </nav>
</header>