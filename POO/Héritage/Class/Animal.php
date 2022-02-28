<?php

abstract class Animal {
    public $nbrPattes;
    public $couleur;
    public $poils; // court || long
    public static $total =0;

    private $mother = "Tata";
    protected $father = "Toto";

    public function __construct (int $nbr, string $couleur, string $poils)
    {
        $this->nbrPattes = $nbr;
        $this->couleur = $couleur;
        $this->poils = $poils;

        self::$total++;
    }
    public static function getTotal() {
        return self::$total;
    }

    public function dormir ()
    {
     return "$this->nom va se coucher";   
    }
    public function manger ()
    {
     return "$this->nom va manger";
    }
}