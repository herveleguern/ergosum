<?php
class Catalogue {
    private $annee;
    private $lesJouets; //tableau d'objets Jouet
    public function __construct($annee) {
        $this->annee = $annee;
        $this->lesJouets = array();
    }
    function ajouterJouet(Jouet $unJouet) {
        $this->lesJouets[] = $unJouet;
    }
    //retourne la quantité en stock (entier) de Jouets dans la tranche d'age en parametre
    function quantiteEnStock($codeTranche){
       //A CODER
    }
}
