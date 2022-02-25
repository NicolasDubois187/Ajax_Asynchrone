<?php
require './helpers.php';
$db = 'mysql:host=127.0.0.1;dbname=async_await';
$db_user = "root";
$db_pwd = "root";

if (!empty($_POST)) {

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

  switch ($_POST['action']) {
    case 'add':
      $data = [
        "name" => validate($_POST['name']),
        "phone" => validate($_POST['phone']),
        "email" => validate($_POST['email']),
        "address" => validate($_POST['address']),
      ];


      try {
        //Préparation de la requète
        $req = $DBconnect->prepare('INSERT INTO myTable(name, phone, email, address) VALUES(:name, :phone, :email, :address)');

        //Éxécution de la requête 
        $req->execute($data);

        echo json_encode([
          "status" => "ok",
          "message" => "Ajout efféctué avec succès"
        ]);
      } catch (PDOException $e) {
        echo json_encode([
          "status" => "error",
          "message" => $e->getMessage()
        ]);
      }
      break;
    case 'del':
      $email = validate($_POST['email']);

      try {
        $sql = "DELETE FROM myTable WHERE email = '$email'";
        $req = $DBconnect->prepare($sql);
        $req->execute();

        echo json_encode([
          "status" => "ok",
          "message" => "Suppression efféctué avec succès"
        ]);
      } catch (PDOException $e) {
        echo json_encode([
          "status" => "error",
          "message" => $e->getMessage()
        ]);
      }
      break;

    default:
      # code...
      break;
  }
} else {
  try {
    // Connection à la base de données
    $DBconnect = new PDO($db, $db_user, $db_pwd);
    // $DBconnect->exec("SET NAMES utf8");
    $DBconnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $req = "SELECT name, phone, email, address FROM myTable";
    $data = $DBconnect->query($req)->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
  } catch (PDOException $e) {
    echo json_encode([
      "status" => "error",
      "message" => $e->getMessage()
    ]);
  };
}
