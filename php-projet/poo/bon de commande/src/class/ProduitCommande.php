<?php
require_once "main.php";

class ProduitCommande {
    private int $quantitee;
    private Produit $produit;

    /**
     * @param int $quantitee
     * @param Produit $produit
     */
    public function __construct(int $quantitee, Produit $produit)
    {
        $this -> quantitee = $quantitee;
        $this -> produit = $produit;
    }
    public function __toString(): string
    {
        $refProduit = $this->produit->getRefProduit();
        $descriptionProduit = $this->produit->getDescriptionProduit();
        $unite =$this->produit->getUnite();
        $nb = $this->quantitee;
        $prix = $this->produit->getPrixHT();
        $tauxPourcent = $this->produit->getTauxTVA();
        $TVA = $this->totalTVA();
        $TTC = $this->totalTTC();
        return "$refProduit - $descriptionProduit - $nb - $unite - $prix € - $tauxPourcent % - $TVA € - $TTC";
    }
    public function totalHT() : float {
        return $this->produit->getPrixHT()*$this->getQuantitee();
    }
    public function totalTVA() : float {
        return ($this->produit->getTauxTVA()/100)*$this->totalHT();
    }
    public function totalTTC() : float {
        return $this->totalHT()+$this->totalTVA();
    }
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