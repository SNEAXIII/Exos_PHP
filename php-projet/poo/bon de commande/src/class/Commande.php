<?php
require_once "main.php";

class Commande
{
    private int $idCommande;
    private DateTime $dateCommande;
    private ?string $modePaiement;
    private ?string $modalitePaiement;
    /**
     * @var ProduitCommande[]
     */
    private array $listeProduitsCommandes;
    private Client $client;

    /**
     * @param int $idCommande
     * @param DateTime $dateCommande
     * @param ?string $modePaiement
     * @param ?string $modalitePaiement
     * @param ProduitCommande[] $listeProduitsCommandes
     * @param Client $client
     */
    public function __construct(int $idCommande, DateTime $dateCommande, Client $client, string $modePaiement = null, string $modalitePaiement = null, array $listeProduitsCommandes = [])
    {
        $this -> idCommande = $idCommande;
        $this -> dateCommande = $dateCommande;
        $this -> modePaiement = $modePaiement;
        $this -> modalitePaiement = $modalitePaiement;
        $this -> listeProduitsCommandes = $listeProduitsCommandes;
        $this -> client = $client;
    }

    /**
     * @param produit $produit
     * @param int $nb
     * @return null
     */
    public function ajouterProduit(produit $produit, int $nb) : bool
    {
        foreach ($this -> listeProduitsCommandes as $produitCommande) {
            if ($produitCommande -> getProduit() === $produit) {
                $produitCommande->setQuantitee($produitCommande->getQuantitee()+$nb);
                return true;
            }
        }
        $this -> listeProduitsCommandes[] = new ProduitCommande($nb,$produit);
        return false;
    }
    public function editer() : void {
        echo $this;
    }
    public function __toString(): string
    {
        $noCommande = $this->idCommande;
        $date = $this->dateCommande;
        $client = $this->client->getNomClient();
        $idClient = $this->client->getIdClient();
        $rue = $this->client->getRue();
        $codePostal = $this->client->getCodePostal();
        $ville = $this->client->getVille();

        $texte =
            "
            Commande n°$noCommande du $date
            Client : $client ($idClient) 
            $rue
            $codePostal $ville
            ";
        return $texte;
    }
}