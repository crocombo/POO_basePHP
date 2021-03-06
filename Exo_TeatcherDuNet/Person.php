<?php
class Person
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// GENERALITE
// {
// 	public $firstName = 'Cro';
// 	public $lastName = 'Combo';
// 	public $age = '39';
// }

// $tarik = new Person;
// echo 'prenom : '.$tarik->firstName. PHP_EOL;
// echo 'nom : '.$tarik->lastName. PHP_EOL;
// echo 'age : '.$tarik->age. PHP_EOL;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ASSIGNATION OBJET COURANT AVEC $THIS
//{
//    public $firstName;
//    public $lastName;
//    public $age;

    // Constructeur (fonction/methode)
//    public function __construct($firstName, $lastName, $age)
//    {
//        $this -> firstName = $firstName;
//        $this -> lastName = $lastName;
//        $this -> age = $age;
//    }   
//}

// Creation new objects
//$tarik = new Person('Tarik', 'CRO', 39);
//$sancho = new Person('Sancho', 'OMBRE', 45);
//$pedro = new Person('Pedro', 'GRINGO', 34);

// test passage des valeurs aux new objects var_dump
//var_dump($tarik->firstName);
//var_dump($tarik->lastName);
//var_dump($tarik->age);
//echo '<br>';
//var_dump($sancho->firstName);
//var_dump($sancho->lastName);
//var_dump($sancho->age);
//echo '<br>';
//var_dump($pedro->firstName);
//var_dump($pedro->lastName);
//var_dump($pedro->age);
//echo '<br>';
//echo '<br>';

// test passage des valeurs aux new objects avec echo
//echo 'Prenon : ' . $tarik->firstName . ' ; Nom : ' . $tarik->lastName . ' ; Age : '.$tarik->age . ' .<br>';
//echo 'Prenon : ' . $sancho->firstName . ' ; Nom : ' . $sancho->lastName . ' ; Age : '.$sancho->age . ' .<br>';
//echo 'Prenon : ' . $pedro->firstName . ' ; Nom : ' . $pedro->lastName . ' ; Age : '.$pedro->age . ' .<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 1er INTRO AVEC METHODE
{
    public $firstName;
    public $lastName;
    public $age;
    private static $totalCount = 0;

    // Constructeur (fonction/methode)
    public function __construct($firstName, $lastName, $age)
    {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> age = $age;

        static::$totalCount ++;                             // Methode d'incrementation
        //static::$totalCount += 1;                         // Autre methode d'incrementation
        //static::$totalCount = static::$totalCount + 1;    // Autre methode d'incrementation

    }

    public static  function getTotalCount()
    {
        return static::$totalCount;
    }

    // new methode 1
    public function danser()
    {
        echo $this -> lastName . ' est entrain de danser *************************************<br>' . PHP_EOL;
    }

    // new methode 2
    public function fullName1()
    {
        echo  $this->firstName. ' ' . $this->lastName . ' <br>' . PHP_EOL;
    }

    // new methode 3
    public function fullName2()
    {
        return  $this->firstName. ' ' . $this->lastName .' '. $this->age .' ans <br>' . PHP_EOL;
        //return  sprintf("%s %s", $this->firstName, $this->lastName);
    }

    // Methode getAge pour changer l'age en mois
    public function getAge()
    {
          return $this -> age * 365;
    }

}

// Creation new objects
$tarik = new Person('Tarik', 'CRO', 39);

// Avec methode 1
$tarik -> danser();

// Avec methode 2
$tarik -> fullName1();


// Avec methode 3
$MyNewVarTarik = $tarik -> fullName2(); 
echo $MyNewVarTarik;
echo '(Age en jours  = '.$tarik->getAge().' jours)';
echo ' <br>' . PHP_EOL;

// suite exemple Objet
echo ' <br>' . PHP_EOL;

$sancho = new Person('Sancho', 'OMBRE', 45);
$sancho -> danser();

$pedro = new Person('Pedro', 'GRINGO', 34);
$pedro -> danser();



echo ' <br>' . PHP_EOL;
echo 'Methode pour compter le nombre d\'objet :<br>' . PHP_EOL;
// L'opérateur de résolution de portée (::) ou "scope resolution operator"
echo 'Nombre d\'objet(s)  : '. Person::getTotalCount() . PHP_EOL;




?>
