<?php

require_once "./src/modele/dao/livreDAO.php";
//require_once "./src/modele/class/Auteur.php";

$livres = new LivreDao();
var_dump($livres->findAll());