<?php

// require "modelInterface.php";

class User implements modelInterface {

    private $id = 1;
    private $name;
    private $age;

    private static $total_user = 0;

    public function __construct (string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;

        self::$total_user++;

        $this->id = self::$total_user;
    }

    public function getId() {
        return $this->id;
    }
    public function setId(int $value) {
        $this->id =$value;
    }
    public function getName() {
        return $this->name;
    }
    public function setName(string $value) {
        $this->name =$value;
    }
    public function getAge() {
        return $this->age;
    }
    public function setAge(int $value) {
        $this->age =$value;
    }
    public static function getTotalUser() {
        return self::$total_user;
    }

}