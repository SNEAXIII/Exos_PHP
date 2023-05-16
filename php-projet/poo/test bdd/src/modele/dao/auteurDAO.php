<?php
//cette classe permet de faire du CRUD et tu mapping relationnel
require_once "./src/modele/class/Auteur.php";
require_once "./src/modele/class/Database.php";
class AuteurDao
{
    /*
     * @return Auteur[]
     */
    public function findAll() : array {
//        connexion à la bdd
        $connexion = Database::getConnection();
//        executer le select (rechercher les enregistrements)
        $requete = "Select * From auteur";
//        mapper les enregistrements vers des objets

//        retourner le resultat (tableau d'auteurs)
        return [];
    }
}