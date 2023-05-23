<?php

class Produit
{
    private int $refProduit;
    private string $descriptionProduit;
    private float $prixHT;
    private float $tauxTVA;
    private string $unite;

    /**
     * @param int $refProduit
     * @param string $descriptionProduit
     * @param float $prixHT
     * @param float $tauxTVA
     * @param string $unite
     */
    public function __construct(int $refProduit, string $descriptionProduit, float $prixHT, float $tauxTVA, string $unite)
    {
        $this -> refProduit = $refProduit;
        $this -> descriptionProduit = $descriptionProduit;
        $this -> prixHT = $prixHT;
        $this -> tauxTVA = $tauxTVA;
        $this -> unite = $unite;
    }

    /**
     * @return int
     */
    public function getRefProduit(): int
    {
        return $this -> refProduit;
    }

    /**
     * @param string $ref_produit
     */
    public function setRefProduit(string $ref_produit): void
    {
        $this -> refProduit = $ref_produit;
    }

    /**
     * @return string
     */
    public function getDescriptionProduit(): string
    {
        return $this -> descriptionProduit;
    }

    /**
     * @param string $description_produit
     */
    public function setDescriptionProduit(string $description_produit): void
    {
        $this -> descriptionProduit = $description_produit;
    }

    /**
     * @return float
     */
    public function getPrixHT(): float
    {
        return $this -> prixHT;
    }

    /**
     * @param float $prix_HT
     */
    public function setPrixHT(float $prix_HT): void
    {
        $this -> prixHT = $prix_HT;
    }

    /**
     * @return float
     */
    public function getTauxTVA(): float
    {
        return $this -> tauxTVA;
    }

    /**
     * @param float $taux_TVA
     */
    public function setTauxTVA(float $taux_TVA): void
    {
        $this -> tauxTVA = $taux_TVA;
    }

    /**
     * @return string
     */
    public function getUnite(): string
    {
        return $this -> unite;
    }

    /**
     * @param string $unite
     */
    public function setUnite(string $unite): void
    {
        $this -> unite = $unite;
    }


}