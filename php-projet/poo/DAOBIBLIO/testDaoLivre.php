<?php

require_once "./src/modele/dao/livreDAO.php";
//require_once "./src/modele/entite/Auteur.php";

$livres = new LivreDao();
//var_dump($livres->findAll());

var_dump($livres->findByIsbn("HEHECESTUNISBN")->getIsbn());