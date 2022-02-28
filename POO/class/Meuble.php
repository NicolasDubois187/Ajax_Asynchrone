<?php

class Table {

    public $marque = "Klak";
    public $matiere = "bois";
    public $pieds = 4;


    public function plier () {
        return "la table se plie";
    }
}

class Chaise {

    public $marque;
    public $matiere;
    public $pieds;

    public function __construct(string $marque, string $matiere, int $pieds) {
        $this->marque = $marque;
        $this->matiere = $matiere;
        $this->pieds = $pieds;
    }

    public function ranger() {
        return "la chaise $this->marque est rangé";
    }

}

class Tabouret {
    private $marque;
    public $matiere;
    private $pieds;

    public function __construct($marque, $matiere, $pieds) {

        $this->marque = $marque;
        $this->matiere = $matiere;
        $this->pieds = $pieds;
    }

    public function getPieds() {
        return $this->pieds;
    }
    public function setPieds(int $value) {
        
       if($value > 1 && $value <= 4) $this->pieds = $value; 
        // // if(is_int($value)) {
        // //     $this->pieds = $value;

        // }
    }

}

class Meuble {

    const FABRIQUANT = 'Ingvar Kamprad';
    public static $nbrMeuble = 0;

    private $couleur;
    private $marque;
    

    public function __construct(string $couleur, string $marque) {
        $this->couleur = $couleur;
        $this->marque = $marque;

        self::$nbrMeuble++;
    }

    public function afficherMarque() {
        return "la marque du meuble est : $this->marque";
    }
    public function afficherCouleur() {
        return "la couleur du meuble est : $this->couleur";
    }


    public function getCouleur() {
        return $this->couleur;
    }
    public function setCouleur(string $value) {
        $this->couleur =$value;
    }
    public function getMarque() {
        return $this->marque;
    }
    public function setMarque(string $value) {
        $this->marque =$value;
    }
    public static function getNbrMeuble() {
        return self::$nbrMeuble;
    }



}
