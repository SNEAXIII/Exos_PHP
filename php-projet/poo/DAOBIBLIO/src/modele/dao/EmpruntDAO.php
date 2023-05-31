<?php
require_once "./src/modele/entite/Emprunt.php";
require_once "./src/modele/entite/Database.php";

class EmpruntDAO
{
    public function create(Emprunt $emprunt) : void {
        $isbn = $emprunt->getLivre()->getIsbn();
        $idUser = $emprunt->getUtilisateur()->getId();
        $connexion = Database ::getConnection();
        $requeteSQL =
            "
INSERT INTO `emprunt`(`dateEmprunt`, `isbn`, `id_utilisateur`) VALUES (now(),:isbn,:id_user);
";
        $requete = $connexion -> prepare($requeteSQL);
        $requete -> bindValue(":isbn", $isbn);
        $requete -> bindValue(":id_user", $idUser);
        $requete -> execute();

    }
}