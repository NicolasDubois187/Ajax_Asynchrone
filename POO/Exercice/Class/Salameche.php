<?php

class Salameche extends Pokemon
{
    public function __construct($name, $attack = "Boule de feu") {
        parent::__construct($name, $attack);
    }

    public function evolue()
    {
        $lastName = $this->name;
        $this->name = "Reptincel";
        $this->attack = "Rafale Feu";
        $this->_damage *= 10;
        $this->_life *= 10;
        $this->_level++;
        echo "$lastName evolue en $this->name". "<br>";
    }
}