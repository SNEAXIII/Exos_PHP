<?php
require_once "./src/modele/entite/Auteur.php";
require_once "./src/modele/entite/Database.php";
require_once "./src/modele/entite/Livre.php";

class LivreDAO
{
    /**
     * @return Livre[]
     */

    public function findAll(): array
    {
        $connexion = Database ::getConnection();
        $requeteSQL =
            "
            SELECT * 
            FROM livre as l 
                INNER JOIN auteur a 
                    on l.id_auteur = a.id_auteur
            ";
        $requete = $connexion -> prepare($requeteSQL);
        $requete -> execute();
        $auteurDBPlusLivreDBs = $requete -> fetchAll(PDO::FETCH_ASSOC);
        $livres = [];
        foreach ($auteurDBPlusLivreDBs as $auteurDBPlusLivreDB) {
            $livres[] = $this -> toObject($auteurDBPlusLivreDB);
        }
        return $livres;
    }

    public function findByIsbn(string $isbn): ?Livre
    {
        $connexion = Database ::getConnection();
        $requeteSQL =
            "
            SELECT * 
            FROM livre as l 
                INNER JOIN auteur a 
                    on l.id_auteur = a.id_auteur
            WHERE isbn = :isbn
            ";
        $requete = $connexion -> prepare($requeteSQL);
        $requete->bindValue(":isbn",$isbn);
        $requete -> execute();
        if ($requete === false) {
            return null;
        }
        return $this->toObject($requete->fetch(PDO::FETCH_ASSOC));
    }
    public function findByIdAuteur(int $idAuteur): ?Livre
    {
        $connexion = Database ::getConnection();
        $requeteSQL =
            "
            SELECT * 
            FROM livre as l 
                INNER JOIN auteur a 
                    on l.id_auteur = a.id_auteur
            WHERE a.id_auteur = :id
            ";
        $requete = $connexion -> prepare($requeteSQL);
        $requete->bindValue(":id",$idAuteur);
        $requete -> execute();
        if ($requete === false) {
            return null;
        }
        return $this->toObject($requete->fetch(PDO::FETCH_ASSOC));
    }

    private function toObject(array $auteurDBPlusLivreDB)
    {
        $auteur = new Auteur();
        $auteur -> setId($auteurDBPlusLivreDB["id_auteur"]);
        $auteur -> setNom($auteurDBPlusLivreDB["nom_auteur"]);
        $auteur -> setPrenom($auteurDBPlusLivreDB["prenom_auteur"]);
        $livre = new Livre();
        $livre -> setAuteur($auteur);
        $livre -> setIsbn($auteurDBPlusLivreDB["isbn"]);
        $livre -> setTitre($auteurDBPlusLivreDB["titre"]);
        $livre -> setDateParution(new DateTime($auteurDBPlusLivreDB["dateParution"]));
        $livre -> setNombrePage($auteurDBPlusLivreDB["nbPages"]);
        return $livre;
    }
}