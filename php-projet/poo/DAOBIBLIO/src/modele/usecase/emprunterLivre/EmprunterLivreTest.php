<?php
require_once "./src/modele/usecase/emprunterLivre/EmprunterLivre.php";
require_once "./src/modele/usecase/emprunterLivre/EmprunterLivreReponse.php";
require_once "./src/modele/usecase/emprunterLivre/EmprunterLivreStatus.php";
require_once "./src/modele/usecase/emprunterLivre/EmprunterLivreRequete.php";

$emprunterLivre = new EmprunterLivre();
$requete = new EmprunterLivreRequete(1,"");

$reponse = $emprunterLivre->execute($requete);
echo $reponse->message;