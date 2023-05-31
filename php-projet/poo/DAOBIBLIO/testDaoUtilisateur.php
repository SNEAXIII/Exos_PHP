<?php

require_once "./src/modele/dao/utilisateurDAO.php";
//require_once "./src/modele/entite/Auteur.php";

$dao = new UtilisateurDAO();
var_dump($dao->utilisateurParId(1));
