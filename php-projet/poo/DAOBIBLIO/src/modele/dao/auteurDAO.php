<?php
//cette classe permet de faire du CRUD et tu mapping relationnel
require_once "./src/modele/entite/Auteur.php";
require_once "./src/modele/entite/Database.php";

class AuteurDao
{
    /**
     * @return Auteur[]
     */

    public function findAll(): array
    {

        // connexion à la bdd
        $connexion = Database::getConnection();

        // executer le select (rechercher les enregistrements)
        $requeteSQL = "Select * From auteur";
        $requete = $connexion->prepare($requeteSQL);
        $requete->execute();
        $auteursDB = $requete->fetchAll(PDO::FETCH_ASSOC);

        // mapper les enregistrements vers des objets
        $auteurs = [];
        foreach ($auteursDB as $auteurDB) {
            $auteur = $this -> toObject($auteurDB);
            $auteurs[] = $auteur;
        }

        // retourner le resultat (tableau d'auteurs)
        return $auteurs;
    }

    //Méthode pour rechercher un auteur par son id
    public function findByName(string $name) : ?array {
        $connexion = Database::getConnection();
        $requeteSQL = "Select * From auteur WHERE nom_auteur LIKE :nom_auteur;";
        $requete=$connexion->prepare($requeteSQL);
        $requete->bindValue(":nom_auteur", $name);
        $requete->execute();
        $auteursBD = $requete->fetchAll(PDO::FETCH_ASSOC);
        if ($auteursBD === false) {
            return null;
        }
        $auteurs = [];
        foreach ($auteursBD as $auteurDB) {
            $auteurs[] = $this->toObject($auteurDB);
        }
        return $auteurs;
    }

    public function create(Auteur $auteur) : bool {
        $connexion = Database::getConnection();
        $requeteSQL =
            "
            INSERT INTO auteur (prenom_auteur, nom_auteur)
            VALUES (:prenom, :nom);
            ";
        $requete=$connexion->prepare($requeteSQL);
        $requete->bindValue(":prenom",$auteur->getPrenom());
        $requete->bindValue(":nom",$auteur->getNom());
        return $requete->execute();
    }

    public function delete(int $id) : void {
        $connexion = Database::getConnection();
        $requeteSQL =
            "
            DELETE FROM auteur
            WHERE id_auteur = :id
            ";
        $requete=$connexion->prepare($requeteSQL);
        $requete->bindValue(":id",$id);
        $requete->execute();
    }

    public function update(Auteur $auteur) : void {
        $connexion = Database::getConnection();
        $requeteSQL =
            "
            UPDATE auteur
            SET prenom_auteur=:prenom, nom_auteur=:nom
            WHERE id_auteur = :id
            ";
        $requete=$connexion->prepare($requeteSQL);
        $requete->bindValue(":prenom",$auteur->getPrenom());
        $requete->bindValue(":nom",$auteur->getNom());
        $requete->bindValue(":id",$auteur->getId());
        $requete->execute();
    }

        /**
     * @param array $auteurDB
     * @return Auteur
     */
    private function toObject(array $auteurDB): Auteur
    {
        $auteur = new Auteur();
        $auteur -> setId($auteurDB["id_auteur"]);
        $auteur -> setNom($auteurDB["nom_auteur"]);
        $auteur -> setPrenom($auteurDB["prenom_auteur"]);
        return $auteur;
    }

}
