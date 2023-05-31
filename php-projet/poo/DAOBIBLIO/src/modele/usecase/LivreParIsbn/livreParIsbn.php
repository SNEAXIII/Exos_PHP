<?php
require_once "./src/modele/dao/livreDAO.php";

class LivreParId
{
    private LivreDAO $livreDAO;

    public function __construct()
    {
        $this -> livreDAO = new LivreDAO();
    }

    public function execute(string $name) : ?Livre
    {
        return $this -> livreDAO->findByIsbn($name);
    }
}