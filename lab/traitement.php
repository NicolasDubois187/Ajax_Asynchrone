<?php
$db = 'mysql:host=127.0.0.1;dbname=async_await';
$db_user = "root";
$db_pwd = "";

function secure($donnees)
{
  $donnees = trim($donnees);
  $donnees = stripslashes($donnees);
  $donnees = htmlspecialchars($donnees);
  return $donnees;
}

try {
  // Connection à la base de données
  $DBconnect = new PDO($db, $db_user, $db_pwd);
  $DBconnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo json_encode([
    "status" => "error",
    "message" => $e->getMessage()
  ]);
}

if (!empty($_POST)) {

  $data = [
    'name' => secure($_POST['name']),
    'email' => secure($_POST['email']),
    'password' => secure($_POST['password']),
  ];

  $req = $DBconnect->prepare('INSERT INTO user (name, email, password) 
    VALUES (:name, :email, :password)');

  $req->execute($data);

  echo json_encode("ok");
} else {

  $req = 'SELECT name, email, password FROM user';
  $req = $DBconnect->query($req)->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode("ok");
}
