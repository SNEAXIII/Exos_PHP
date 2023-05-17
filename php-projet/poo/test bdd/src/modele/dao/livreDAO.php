<?php
require_once "./src/modele/class/Auteur.php";
require_once "./src/modele/class/Database.php";
require_once "./src/modele/class/Livre.php";
class LivreDAO {
    /**
     * @return Livre[]
     */

    public function findAll(): array
    {

        $connexion = Database::getConnection();
        $requeteSQL =
            "
            SELECT * 
            FROM livre as l 
                INNER JOIN auteur a 
                    on l.id_auteur = a.id_auteur
            ";
        $requete = $connexion->prepare($requeteSQL);
        $requete->execute();
        $auteurDBPlusLivreDBs = $requete->fetchAll(PDO::FETCH_ASSOC);
        $livres = [];
        foreach ($auteurDBPlusLivreDBs as $auteurDBPlusLivreDB) {
            $livres[] = $this -> toObject($auteurDBPlusLivreDB);
        }
        return $livres;
    }

    private function toObject(array $auteurDBPlusLivreDB)
    {
        $auteur = new Auteur();
        $auteur -> setId($auteurDBPlusLivreDB["id_auteur"]);
        $auteur -> setNom($auteurDBPlusLivreDB["nom_auteur"]);
        $auteur -> setPrenom($auteurDBPlusLivreDB["prenom_auteur"]);
        $livre = new Livre();
        $livre->setAuteur($auteur);
        $livre->setIsbn($auteurDBPlusLivreDB["isbn"]);
        $livre->setTitre($auteurDBPlusLivreDB["titre"]);
        $livre->setDateParution(new DateTime($auteurDBPlusLivreDB["dateParution"]));
        $livre->setNombrePage($auteurDBPlusLivreDB["nbPages"]);
        return $livre;
    }
}