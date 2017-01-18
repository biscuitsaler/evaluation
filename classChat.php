<?php
class Chat
{
    private $_prenom;
    private $_age;
    private $_couleur;
    private $_sexe;
    private $_race; // Objets privés

    function __construct($prenom, $age, $couleur, $sexe, $race) //fonction qui s'exécute automatiquement et qui permet d'exploiter les variables que je passe quand j'instancie la classe.
    {
        $this->_prenom = $prenom;
        $this->_age = $age;
        $this->_couleur = $couleur;
        $this->_sexe = $sexe;
        $this->_race = $race;
    }

    public function Prenom($value = "") //j'apelle ma fonction publique prénom 
    {
        if ($value == "")
        {
            return $this->_prenom;
        }

        $this->_prenom = $value;
    }
     
     public function Age($value = "") //j'apelle ma fonction publique age
    {
        if ($value == "")
        {
            return $this->_age;
        }

        $this->_age = $value;
    }

    public function Couleur($value = "") //j'apelle ma fonction publique couleur
    {
        if ($value == "")
        {
            return $this->_couleur;
        }    

        $this->_couleur = $value;
    }

    
     public function Sexe($value = "") //j'apelle ma fonction publique sexe
    {
        if ($value == "")
        {
            return $this->_sexe;
        }    

        $this->_sexe = $value;
    }

      public function Race($value = "") //j'apelle ma fonction publique race
    {
        if ($value == "")
        {
            return $this->_race;
        }    

        $this->_race = $value;
    }
}
    


  

    