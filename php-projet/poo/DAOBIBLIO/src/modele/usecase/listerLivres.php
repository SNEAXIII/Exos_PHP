<?php
require_once "./src/modele/dao/livreDAO.php";

class ListerLivre
{
    private LivreDAO $livreDAO;

    public function __construct()
    {
        $this -> livreDAO = new LivreDAO();
    }

    /**
     * @return Livre[]
     */
    public function execute(): array
    {
        return $this -> livreDAO -> findAll();

    }

}