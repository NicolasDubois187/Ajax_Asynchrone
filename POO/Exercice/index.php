<?php

// require "./Class/modelInterface.php";
require "./Class/Pokemon.php";
require "./Class/Salameche.php";
require "./Class/Carapuce.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
    <pre>
    <h2>Salameche</h2>
    <?php

   $pokemon1 = new Salameche("Salameche");
   echo "Nom : $pokemon1->name" . "<br>";
   echo "Points de vie : {$pokemon1->getLife()}" . "<br>";
   echo "Points de dégats : {$pokemon1->getDamage()}" . "<br>";
    
    ?>
    <h2>Carapuce</h2>
    <?php

    $pokemon2 = new Carapuce("Carapuce");
    echo "Nom : $pokemon2->name" . "<br>";
    echo "Points de vie : {$pokemon2->getLife()}" . "<br>";
    echo "Points de dégats : {$pokemon2->getDamage()}" . "<br>";

    ?>
    <hr>
    <h3>Combats</h3>

    <?php
    $pokemon1->makeAttack($pokemon2). "<br>";
    $pokemon1->evolue(). "<br>";
    $pokemon1->makeAttack($pokemon2). "<br>";
    ?>
    <hr>
    <?php
    $pokemon2->makeAttack($pokemon1);
    $pokemon2->levelUp();
    ?>

    </pre>
</body>
</html>