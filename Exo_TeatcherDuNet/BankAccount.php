<?php 

class BankAccount
{

    // Se qui represente un cpt est sont numero de cpt avec $accountNumber
    public $accountNumber;

    // Initialisation de l'etat du cpt (solde a 0))
    public $balance = 0;

    // Passage au constructeur
    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    // Geter & Seter ne sont rien d'autre que des fonctions(methode):
    //      Setters: vont permetre de MODIFIER des attributs
    //      Getters: Vont permetre d' ACCEDER a des attributs

    // Methode pour acceder a l'attribut $balance avec setBalance()
    public function setBalance($balance)
    {
        // Mise en place de fond minimum
        if($balance < 100){
            throw new Exception('Some insufisante, minimum 100 € !');
        }

        $this->balance = $balance;
    }

    // Methode pour multiplier la valeur de la balance x100
    public function getBalance()
    {
        return $this -> balance * 100;
    }



}

// New object from BankAccount class, creation d'un objet avec num de cpt'
$CptTarik = new BankAccount("007");

// Lecture CPT
var_dump($CptTarik);

echo '<br>';

// Initaialistation balance (solde)
$CptTarik->setBalance(100);

// Lecture CPT
var_dump($CptTarik);

echo '<br>';

var_dump($CptTarik->balance);

// recuperation x100 de getBalance()
echo 'Balance x100 :<br>';

var_dump($CptTarik->getBalance() );











?>
