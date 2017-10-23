<?php

class Commande
{
    private $listeProduits;
    private $adresseLivraison;
    private $date;

    // Constructeur (tous les arguments sont obligatoires)
    function __construct($listeProduits, $adresseLivraison, $date)
    {
        $this->setListeProduits($listeProduits);
        $this->setAdresseLivraison($adresseLivraison);
        $this->setDate($date);
    }


    // Getters et setters

    public function getListeProduits()
    {
        return $this->listeProduits;
    }

    public function setListeProduits($listeProduits)
    {
        $this->listeProduits = $listeProduits;
    }


    public function getAdresseLivraison()
    {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison($adresseLivraison)
    {
        $this->adresseLivraison = $adresseLivraison;
    }


    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getPrixTotal()
    {
        $prix = 0;

        foreach($this->getListeProduits() as $produit)
        {
            $prix += $produit->getPrix();
        }

        return $prix;
    }



    public function visiteur()
    {
        $resume = 'Cette commande a été passée le '.$this->getDate()->format('Y/m/d');
        $resume .= ', elle sera livrée à cette adresse : '.$this->getAdresseLivraison();

        $resume .= '<br />Elle comprend les produits suivants :';

        $resume .= '<ul>';
        foreach($this->getListeProduits() as $produit)
        {
            $resume .= '<li>'.$produit->visiteur().'</li>';
        }
        $resume .= '</ul>';

        $resume .= 'Et le prix total saura de : '.$this->getPrixTotal().' € ttc.';
        

        return $resume;
    }
}