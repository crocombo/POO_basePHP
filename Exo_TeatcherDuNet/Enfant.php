<?php
// La class fille est celle qui hérite ()class fille / class dérivé / sous class)
// class Enfant(appellée classe fille)) herite de la classe Papa (heritage des attributs et des méthode)
class Enfant extends Papa
{
     public function test_transmition()
    {
        return $this->getNbrDeTete();
    }

}
































?>
