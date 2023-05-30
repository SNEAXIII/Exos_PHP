<?php
xdebug_connect_to_client();
require_once "./src/modele/dao/auteurDAO.php";
require_once "./src/modele/entite/Auteur.php";

$auteurs = new AuteurDao();

//var_dump($auteurs->findAll());

$alexis = $auteurs->findByName("Bassignot");
var_dump($alexis);

//$fadel = new Auteur();
//$fadel->setPrenom("Fadel");
//$fadel->setNom("Amar");
//$auteurs->create($fadel);
//
//$auteurs->delete(5);
//
//$idOdin = 2;
//$Odin = $auteurs->findByName("Odin");
//$Odin->setPrenom("Odinette");
//$auteurs->update($Odin);