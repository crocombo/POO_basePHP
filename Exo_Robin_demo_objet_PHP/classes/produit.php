<?php

class Produit
{
    private $nom;
    private $prix;
    private $type;

    // Constructeur (type est facultatif)
    function __construct($nom, $prix, $type = null)
    {
        $this->setNom($nom);
        $this->setPrix($prix);
        $this->setType($type);
    }


    // Getters et setters

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }


    public function resume()
    {
        // Phrase de base
        $resume = 'Le produit "'.$this->getNom().'" coûte '.$this->getPrix().' €';

        // Si le produit a un attribut type, on décrit son type
        if ($this->getType())
        {
            $resume .= ', il est de type "'.$this->getType().'"';
        }

        // En bon francais, on met un point à la fin des phrases !!
        $resume .= '.';

        return $resume;
    }

    
    public function visiteur()
    {
        return $this->resume();
    }
}