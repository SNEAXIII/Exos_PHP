<?php
require_once "./src/modele/entite/Utilisateur.php";
require_once "./src/modele/entite/Database.php";

class UtilisateurDAO
{
    public function findById($id): ?Utilisateur
    {
        {
            $connexion = Database ::getConnection();
            $requeteSQL =
                "
            SELECT * 
            FROM utilisateur
            WHERE idUtilisateur = :id
                ";
            $requete = $connexion -> prepare($requeteSQL);
            $requete -> bindValue(":id", $id);
            $requete -> execute();
            $utilisateurDB = $requete -> fetch(PDO::FETCH_ASSOC);
            if ($utilisateurDB === false) {
                return null;
            }
            return $this -> toObject($utilisateurDB);
        }
    }
    private function toObject(array $utilisateurDB):Utilisateur{
        $utilisateur = new Utilisateur();
        $utilisateur->setId($utilisateurDB["idUtilisateur"]);
        $utilisateur->setPrenom($utilisateurDB["prenomUtilisateur"]);
        $utilisateur->setNom($utilisateurDB["nomUtilisateur"]);
        return $utilisateur;
    }
}