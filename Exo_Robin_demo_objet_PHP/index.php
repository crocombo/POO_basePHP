<?php

require 'classes/produit.php';
require 'classes/commande.php';

/*

// EXEMPLE 1

$produit = new Produit('Twix', 0.4, 'sucrerie');
$kinder = new Produit('Kinder Bueno', 0.8);

echo $produit->resume();

echo '<br />';

echo $kinder->resume();
*/


// EXEMPLE 2

// On aurait pu aussi créer ce tableau en récupérant les valeurs dans la bdd
$produits = array(
    new Produit('Twix', 0.4, 'sucrerie'),
    new Produit('Kinder Bueno', 0.8)
);

/*
$commande = new Commande($produits, '1 rue de Mulhouse', new DateTime());

echo $commande->visiteur();
*/

$commandes = array(
    new Commande($produits, '1 rue de Mulhouse', new DateTime()),
    new Commande($produits, '2 rue de Strasbourg', new DateTime())
);

foreach($commandes as $tarik)
{
    echo '<br>'.$tarik->visiteur().'<hr>';
}


/*
echo 'Adresse de livraison : '.$commande->getAdresseLivraison();

echo '<br />';

echo 'Prix total de la commande : '.$commande->getPrixTotal().' €';
*/


/*
echo '<pre>';
var_dump($commande->getListeProduits());
echo '</pre>';
*/
