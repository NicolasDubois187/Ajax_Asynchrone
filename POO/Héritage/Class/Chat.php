<?php



class Chat extends Animal {
    public $race;
    public $nom;

    public function __construct($nom, $race, $nbr, $couleur, $poils) {

        parent::__construct($nbr, $couleur, $poils);

        $this->nom = $nom;
        $this->race = $race;
    }

    public function miauler()
    {
        return "miaou !";
    }
    public function getMother()
    {
        return $this->mother;
    }
    public function getFather()
    {
        return $this->father;
    }
}