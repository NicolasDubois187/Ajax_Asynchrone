<?php

require "./Class/modelInterface.php";
require "./Class/User.php";

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
    <h1>Interface</h1>
   <pre>
   <?php

    $toto = new User("Toto", 24);
    echo "ID : {$toto->getId()}" . "<br>";
    echo "Name : {$toto->getName()}" . "<br>";
    echo "Age : {$toto->getAge()}" . "<br>";
    echo "Nombre total d'utilisateurs créés :" .User::getTotalUser() . "<br>";
      
    ?>
    <hr>

    <?php

    $boris = new User("Boris", 35);
    echo "ID : {$boris->getId()}" . "<br>";
    echo "Name : {$boris->getName()}" . "<br>";
    echo "Age : {$boris->getAge()}" . "<br>";
    echo "Nombre total d'utilisateurs créés :" .User::getTotalUser() . "<br>";


    ?>


   </pre> 
</body>
</html>