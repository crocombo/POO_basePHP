<?php

                                                        // Créer et manipuler un objet

require 'classPersonnage.php';

                                                        // Accéder à un élément depuis la classe

$perso1 = new Personnage;                                // Créer un objet; $perso1 sera un objet de typePersonnage (on instancie la classe)

$perso2 = new Personnage;                                // Créer un objet; $perso2 sera un objet de typePersonnage (on instancie la classe)


$perso1->frapper($perso2);                              // Ensuite, on veut que le personnage n°1 frappe le personnage n°2.


$perso1->parler();                                       // Appeler les méthodes de l'objet
$perso1->deplacer();
$perso1->getDegat();
$perso1->gagnerExperience();



$perso2->parler();                                       // Appeler les méthodes de l'objet
$perso2->deplacer();
$perso2->getDegat();
$perso2->gagnerExperience();


var_dump($perso2);
var_dump($perso1);
