<?php
require_once "./src/modele/entite/Utilisateur.php";
require_once "./src/modele/entite/Database.php";

class UtilisateurDAO
{
    public function utilisateurParId($id): ?Utilisateur
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
            if ($requete === false) {
                return null;
            }
            return $this -> toObject($requete -> fetch(PDO::FETCH_ASSOC));
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