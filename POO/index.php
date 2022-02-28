<?php
require './Class/Meuble.php';
require './Class/Voiture.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POO</title>
  </head>
  <body>
    <pre>
    <?php

    $table = new Table;
    var_dump($table);

    $table2 = new Table;
    $table2->marque = "Plop";
    $table2->matiere = "marbre";
    $table2->pieds = 3;

    var_dump($table2)

    ?>

    <hr>

    <?php

    $chaise = new Chaise("Kallax", "Bois", 3);
    var_dump($chaise);
    echo $chaise->ranger();

    ?>

    <hr>

    <?php

    $tabouret = new Tabouret("Kyyr", "bois", 4);
    echo "nombre de pieds : {$tabouret->getPieds()}\n";
    $tabouret->setPieds(3);
    echo "nombre de pieds après modif : {$tabouret->getPieds()}";

    ?>

    <hr>

    <?php

    $meuble1 = new Meuble("Rouge", "Ikea");
    $meuble2 = new Meuble("Blanc", "But");
    // var_dump($meuble1);
    echo $meuble1->getMarque(). "<br>";
    echo $meuble1->getCouleur(). "<br>";
    // var_dump($meuble2);
    echo $meuble2->getMarque(). "<br>";
    echo $meuble2->getCouleur(). "<br>";
    
    ?>

    <hr>

    <?php

    echo "fabricant : " .Meuble::FABRIQUANT. "<br>";
    echo "Nombre de meubles instanciés : ".Meuble::$nbrMeuble."<br>";
    echo "Nbr meuble depuis objet :" .$meuble2->getNbrMeuble()."<br>";


    ?>

    <hr>

    <?php

    $twingo = new Voiture("Rouge", 3);
    $clio = new Voiture("Blanche", 5);
    $renault = new Voiture("noire", 5);
    // var_dump($meuble1);
    echo "couleur : {$twingo->getCouleur()}". "<br>";
    echo "Nombre de portes : {$twingo->getNbrPortes()}". "<br>";
    // var_dump($meuble2);
    echo "couleur : {$clio->getCouleur()}". "<br>";
    echo "Nombre de portes : {$clio->getNbrPortes()}". "<br>";

    echo "couleur : {$renault->getCouleur()}". "<br>";
    echo "Nombre de portes : {$renault->getNbrPortes()}". "<br>";

    ?>

    <hr>

    <?php

    echo "carburant : " .Voiture::CARBURANT. "<br>";
    echo "Nombre de voitures créées : ".Voiture::$nbrDeVoiture."<br>";
    echo "Nbr voiture depuis objet :" .$clio->getNbrDeVoiture()."<br>";

    ?>

    </pre>
  </body>
</html>
