<?php



final class Chien extends Animal {
    public $race;
    public $nom;

    public function __construct($nom, $race, $nbr, $couleur, $poils) {

        parent::__construct($nbr, $couleur, $poils);

        $this->nom = $nom;
        $this->race = $race;
    }

    public function aboyer()
    {
        return "wouaf !";
    }

}