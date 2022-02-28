<?php

class Voiture {

const CARBURANT = 'Gazoil';
public static $nbrDeVoiture = 0;

private $couleur;
private $nbrPortes;


public function __construct(string $couleur, int $nbrPortes) {
    $this->couleur = $couleur;
    $this->nbrPortes = $nbrPortes;

    self::$nbrDeVoiture++;
}

// public function afficherNbrPortes() {
//     return "la marque du meuble est : $this->nbrPortes";
// }
// public function afficherCouleur() {
//     return "la couleur du meuble est : $this->couleur";
// }


public function getCouleur() {
    return $this->couleur;
}
public function setCouleur(string $value) {
    $this->couleur =$value;
}
public function getNbrPortes() {
    return $this->nbrPortes;
}
public function setNbrPortes(int $value) {
    $this->nbrPortes =$value;
}
public static function getNbrDeVoiture() {
    return self::$nbrDeVoiture;
}



}
?>