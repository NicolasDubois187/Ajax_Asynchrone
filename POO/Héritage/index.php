<?php
    require './Class/Animal.php';
    require './Class/Chat.php';
    require './Class/Chien.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Héritage</h1>

<?php

$booba = new Chat("Booba", "Bombay", 4, "noir", "court");
echo "nom : $booba->nom" ."<br>";
echo "race : $booba->race" ."<br>";
echo "couleur : $booba->couleur" ."<br>";
echo "nbr de pattes : $booba->nbrPattes" ."<br>";
echo "poils : $booba->poils" ."<br>";
echo "{$booba->miauler()}" ."<br>";
echo $booba->dormir()."<br>";
echo $booba->getMother();

?>
<hr>

<?php

$yourri = new Chien("Yourri", "Rot", 4, "noir", "court");
echo "nom : $yourri->nom" ."<br>";
echo "race : $yourri->race" ."<br>";
echo "couleur : $yourri->couleur" ."<br>";
echo "nbr de pattes : $yourri->nbrPattes" ."<br>";
echo "poils : $yourri->poils" ."<br>";
echo "{$yourri->aboyer()}" ."<br>";
echo $yourri->manger();

?>
<hr>

<?php

echo "Nombre total d'animaux : ".Animal::$total."<br>";

?>


    
</body>
</html>