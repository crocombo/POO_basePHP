<?php
class Voiture
{
    // Liste Attributs
    public $marque;
    public $couleur;

    // Liste Methodes Public
    public function demarrer()
    {
        echo 'Vroum Vroum...';
    }

    public function arreter()
    {
        echo 'pluffffff...';
    }

    public function klaxonner()
    {
        echo 'Tuuuuuuuut !!';
    }

    // Liste Methodes Private (encapsulation)
    // Avec les modificateurs d'accée PRIVATE: On ne peut acceder a set methode qu'a l'interieur de la class Voiture
    // Avec les modificateurs d'accée PROTECTED: comme private mais avec notion d'heritage'
    private function relierFilBleuAuFilRouge()
    {
        
    }

}



















?>
