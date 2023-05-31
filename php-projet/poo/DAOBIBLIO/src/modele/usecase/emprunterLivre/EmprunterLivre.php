<?php
require_once "./src/modele/dao/livreDAO.php";
require_once "./src/modele/dao/utilisateurDAO.php";
require_once "./src/modele/dao/empruntDAO.php";
require_once "./src/modele/usecase/EmprunterLivreReponse.php";

class EmprunterLivre
{
    private LivreDAO $livreDAO;
    private UtilisateurDAO $utilisateurDAO;
    private EmpruntDAO $empruntDAO;

    public function __construct()
    {
        $this -> livreDAO = new LivreDAO();
        $this -> utilisateurDAO = new UtilisateurDAO();
        $this -> empruntDAO = new EmpruntDAO();

    }

    public function execute(EmprunterLivreRequete $requete): EmprunterLivreReponse
    {
        # 1 Verifier si l'utilisateur existe
        $livre = $this -> livreDAO -> findByIsbn($requete->isbn);
        if ($livre == null) {
            return new EmprunterLivreReponse(EmprunterLivreStatus::LIVRE_INEXISTANT, "Le livre n'existe pas.");
        }
        # 2 Verifier si le livre existe
        $utilisateur = $this -> utilisateurDAO -> findById($requete->idUtilisateur);
        if ($utilisateur == null) {
            return new EmprunterLivreReponse(EmprunterLivreStatus::UTILISATEUR_INEXISTANT, "L'utilisateur n'existe pas.");
        }
        # 3 Verifier si le livre est deja emprunté

        # 4 Créer l'emprunt
        $emprunt = new Emprunt();
        $emprunt -> setLivre($livre);
        $emprunt -> setUtilisateur($utilisateur);
        $emprunt -> setDateEmprunt(new DateTime());

        # 5 Inserer dans la BDD
        $this -> empruntDAO -> create($emprunt);
        return new EmprunterLivreReponse(EmprunterLivreStatus::OK, "Le livre a bien été emprunté");

    }
}