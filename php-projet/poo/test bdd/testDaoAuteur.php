<?php

require_once "./src/modele/dao/auteurDAO.php";
require_once "./src/modele/class/Auteur.php";

$auteurs = new AuteurDao();

//var_dump($auteurs->findAll());

$idAlexis = 1;
$alexis = $auteurs->findById($idAlexis);
echo "$alexis a pour id $idAlexis\n";

$fadel = new Auteur();
$fadel->setPrenom("Fadel");
$fadel->setNom("Amar");
$auteurs->create($fadel);

$auteurs->delete(5);

$idOdin = 2;
$Odin = $auteurs->findById($idOdin);
$Odin->setPrenom("Odinette");
$auteurs->update($Odin);