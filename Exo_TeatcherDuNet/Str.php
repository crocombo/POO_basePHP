<?php
class Str
{

//    public function upper($string)
//    {
//        return mb_strtoupper($string);
//    }

//    public function lower($string)
//    {
//        return mb_strtolower($string);
//    }

//    public function length($string)
//    {
//        return mb_strtolength($string);
//    }

//}

//$str = new Str;
//echo $str->upper("ba ba ba ba ba ba"). PHP_EOL;

// Même exemple avec methode static
    public static function upper($string)
    {
        return mb_strtoupper($string);
    }

    public static function lower($string)
    {
        return mb_strtolower($string);
    }

    public function length($string)
    {
        return mb_strlen($string);
    }

}

// plus besoin de creer d'objet de la class Str, il suffit juste Str:: et la methoed upper,lower ou length
echo Str::upper("ba ba ba ba ba ba <br>"). PHP_EOL;
echo Str::lower("ba ba ba ba ba ba <br>"). PHP_EOL;
echo Str::length("ba ba ba ba ba ba <br>"). PHP_EOL;













?>
