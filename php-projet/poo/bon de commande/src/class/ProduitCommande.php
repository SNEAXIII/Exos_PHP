<?php
require_once "main.php";

class ProduitCommande {
    private int $quantitee;
    private Produit $produit;

    /**
     * @return int
     */
    public function getQuantitee(): int
    {
        return $this -> quantitee;
    }

    /**
     * @param int $quantitee
     */
    public function setQuantitee(int $quantitee): void
    {
        $this -> quantitee = $quantitee;
    }

    /**
     * @return Produit
     */
    public function getProduit(): Produit
    {
        return $this -> produit;
    }

    /**
     * @param Produit $produit
     */
    public function setProduit(Produit $produit): void
    {
        $this -> produit = $produit;
    }

}