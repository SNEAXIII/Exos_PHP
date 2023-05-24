<?php
require_once "main.php";

class ProduitCommande
{
    private float $quantitee;
    private Produit $produit;

    /**
     * @param float $quantitee
     * @param Produit $produit
     */
    public function __construct(float $quantitee, Produit $produit)
    {
        $this -> quantitee = $quantitee;
        $this -> produit = $produit;
    }
    /**
     * @return string
     */
    public function __toString(): string
    {
        $refProduit = $this -> produit -> getRefProduit();
        $descriptionProduit = $this -> produit -> getDescriptionProduit();
        $unite = $this -> produit -> getUnite();
        $nb = $this -> quantitee;
        $prix = $this -> produit -> getPrixHT();
        $tauxPourcent = $this -> produit -> getTauxTVA();
        $TVA = $this -> totalTVA();
        $TTC = $this -> totalTTC();
        return "$refProduit - $descriptionProduit - $nb - $unite - $prix € - $tauxPourcent % - $TVA € - $TTC €";
    }

    /**
     * @return float
     */
    public function totalHT(): float
    {
        return $this -> produit -> getPrixHT() * $this -> getQuantitee();
    }
    /**
     * @return float
     */
    public function totalTVA(): float
    {
        return ($this -> produit -> getTauxTVA() / 100) * $this -> totalHT();
    }

    /**
     * @return float
     */
    public function totalTTC(): float
    {
        return $this -> totalHT() + $this -> totalTVA();
    }

    /**
     * @return int
     */
    public function getQuantitee(): int
    {
        return $this -> quantitee;
    }

    /**
     * @param float $quantitee
     */
    public function setQuantitee(float $quantitee): void
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

}