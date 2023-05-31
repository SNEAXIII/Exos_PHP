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
        $livreDB = $requete->fetch(PDO::FETCH_ASSOC);
        if ($livreDB === false) {
            return null;
        }
        return $this->toObject($livreDB);
    }
    public function findByName(string $nom): ?Livre
    {
        $connexion = Database ::getConnection();
        $requeteSQL =
            "
            SELECT * 
            FROM livre as l 
                INNER JOIN auteur a 
                    on l.id_auteur = a.id_auteur
            WHERE a.nom_auteur like CONCAT('%', :nom, '%')
            ";
        $requete = $connexion -> prepare($requeteSQL);
        $requete->bindValue(":nom",$nom);
        $requete -> execute();
        $livres = $requete->fetch(PDO::FETCH_ASSOC);
        if ($livres === false) {
            return null;
        }
        return $this->toObject($livres);
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
