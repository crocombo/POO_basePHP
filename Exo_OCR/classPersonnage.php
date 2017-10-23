<?php

class Personnage                                        // Nous créons une classe « Personnage ». Présence du mot-clé class suivi du nom de la classe.
{

                                                        // Déclaration des attributs et initialistation, chaque attribut est précédé d'un underscore.

    private $_force = 20;                               // La force du personnage, par défaut à 50.
    private $_localisation = 'Lyon';                    // Sa localisation, par défaut à Lyon.
    private $_experience = 0;                           // Son expérience, par défaut à 1.
    private $_degats = 0;                               // Ses dégâts, par défaut à 0.



    // Déclaration des méthodes ici.
    public function parler()                            // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    {
        echo '<pre>Je suis un personnage !</pre>';
    }


    public function deplacer()                          // Une méthode qui déplacera le personnage (modifiera sa localisation).
    {
        echo '<pre>Je me télétransporte...</pre>';
    }


    public function frapper(Personnage $persoAFrapper)                           // Une méthode qui frappera un personnage (suivant la force qu'il a).
    {
        //echo $persoAFrapper->_degats;
        //$persoAFrapper->_degats += $this->_force;
        echo $persoAFrapper->_degats;
        $persoAFrapper->_degats += 10;
        echo $persoAFrapper->_degats;
    }


    public function gagnerExperience()                  // Une méthode augmentant l'attribut $experience du personnage.
    {                                                   // On ajoute 1 à notre attribut $_experience.
        $this->_experience ++;
        $test = $this->_experience;
        echo '<pre>Niveau d\'experience : "'.$test.'"</pre>';
    }



    public function getDegat()
    {
        echo $this->_degats;
    }






}



