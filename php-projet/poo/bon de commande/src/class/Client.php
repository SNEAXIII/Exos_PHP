<?php

class Client
{
    private int $idClient;
    private string $nomClient;
    private string $rue;
    private string $ville;
    private string $codePostal;
    private string $numeroTelephone;
    private string $paysClient;

    /**
     * @return int
     */
    public function getIdClient(): int
    {
        return $this -> idClient;
    }

    /**
     * @param int $idClient
     */
    public function setIdClient(int $idClient): void
    {
        $this -> idClient = $idClient;
    }

    /**
     * @return string
     */
    public function getNomClient(): string
    {
        return $this -> nomClient;
    }

    /**
     * @param string $nomClient
     */
    public function setNomClient(string $nomClient): void
    {
        $this -> nomClient = $nomClient;
    }

    /**
     * @return string
     */
    public function getRue(): string
    {
        return $this -> rue;
    }

    /**
     * @param string $rue
     */
    public function setRue(string $rue): void
    {
        $this -> rue = $rue;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this -> ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this -> ville = $ville;
    }

    /**
     * @return string
     */
    public function getCodePostal(): string
    {
        return $this -> codePostal;
    }

    /**
     * @param string $codePostal
     */
    public function setCodePostal(string $codePostal): void
    {
        $this -> codePostal = $codePostal;
    }

    /**
     * @return string
     */
    public function getNumeroTelephone(): string
    {
        return $this -> numeroTelephone;
    }

    /**
     * @param string $numeroTelephone
     */
    public function setNumeroTelephone(string $numeroTelephone): void
    {
        $this -> numeroTelephone = $numeroTelephone;
    }

    /**
     * @return string
     */
    public function getPaysClient(): string
    {
        return $this -> paysClient;
    }

    /**
     * @param string $paysClient
     */
    public function setPaysClient(string $paysClient): void
    {
        $this -> paysClient = $paysClient;
    }
}