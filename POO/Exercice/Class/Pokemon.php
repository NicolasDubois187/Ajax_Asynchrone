<?php

    class Pokemon {
    public $name;
    public $attack;

    protected $_damage = 10;
    protected $_life = 100;
    protected $_level = 1;


    public function __construct ($name, $attack)
    {
        $this->name = $name;
        $this->attack = $attack;

            
    }
    public function levelUp()
    {
        $this->_level++;
        $this->_damage += 10;// return 20
        echo "$this->name gagne un niveau et passe au niveau $this->_level";
    }

    public function getDamage() {
        return $this->_damage;
    }
    
    public function getLife() {
        return $this->_life;
    }
   
    public function getLevel() {
        return $this->_level;
    }
    
    public function makeAttack($target)
    {
     echo"$this->name attaque $target->name avec $this->attack". "<br>"; 
     $target->takeDamage($this->_damage); 
    }
    public function takeDamage($damage)
    {
        $this->_life -= $damage;
        if($this->_life <= 0) {
            echo "$this->name est mort ! RIP";
        } else
     echo "$this->name reçoit $damage points de dégats !". "<br>";
    }

}