<?php
class Produit {
    private string $refProduit;
    private string $descriptionProduit;
    private float $prixHT;
    private float $tauxTVA;
    private string $unite;

    /**
     * @return string
     */
    public function getRefProduit(): string
    {
        return $this -> ref_produit;
    }

    /**
     * @param string $ref_produit
     */
    public function setRefProduit(string $ref_produit): void
    {
        $this -> ref_produit = $ref_produit;
    }

    /**
     * @return string
     */
    public function getDescriptionProduit(): string
    {
        return $this -> description_produit;
    }

    /**
     * @param string $description_produit
     */
    public function setDescriptionProduit(string $description_produit): void
    {
        $this -> description_produit = $description_produit;
    }

    /**
     * @return float
     */
    public function getPrixHT(): float
    {
        return $this -> prix_HT;
    }

    /**
     * @param float $prix_HT
     */
    public function setPrixHT(float $prix_HT): void
    {
        $this -> prix_HT = $prix_HT;
    }

    /**
     * @return float
     */
    public function getTauxTVA(): float
    {
        return $this -> taux_TVA;
    }

    /**
     * @param float $taux_TVA
     */
    public function setTauxTVA(float $taux_TVA): void
    {
        $this -> taux_TVA = $taux_TVA;
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