<?php
class EmprunterLivreRequete {
    public int $idUtilisateur;
    public string $isbn;

    /**
     * @param int $idUtilisateur
     * @param string $isbn
     */
    public function __construct(int $idUtilisateur, string $isbn)
    {
        $this -> idUtilisateur = $idUtilisateur;
        $this -> isbn = $isbn;
    }

}