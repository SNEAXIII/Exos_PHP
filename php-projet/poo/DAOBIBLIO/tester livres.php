<?php
require_once '.\src\modele\usecase\listerLivres.php';
require_once '.\src\modele\usecase\livreParAuteur.php';
//$listerLivres = new ListerLivre();
//$livres = $listerLivres->execute();
//foreach ($livres as $livre) {
//    echo $livre->getTitre()." ".$livre->getAuteur()->getNom();
//}
//$listerLivresAuteur = new LivreParAuteur();
//$livresParAuteur = $listerLivresAuteur->execute(1);
//foreach ($livres as $livre) {
//    echo $livre->getTitre()." ".$livre->getAuteur()->getNom();
//}
$test = new LivreDAO();
foreach ($test->findByName("bass") as $livre) {
    echo $livre;
}