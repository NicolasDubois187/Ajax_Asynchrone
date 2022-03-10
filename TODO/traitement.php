<?php

$db = 'mysql:host=127.0.0.1;dbname=todos';
$db_user = "root";
$db_pwd = "";

function secure ($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

try {
    $DBconnect = new PDO($db, $db_user, $db_pwd);
    $DBconnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo json_encode([
      "status" => "error",
      "message" => $e->getMessage()
    ]);
  }

if (!empty($_POST)) {

    switch ($_POST['action']){

        case "add":

            if($_POST['task'] != ""){

                $data = [
                
                  'task' => secure($_POST['task']),
                  
                ];
            
                $req = $DBconnect->prepare('INSERT INTO todo(task) VALUES(:task)');
            
                $req->execute($data);
              
               echo json_encode($data);

            }

        break;

        case "delete":

            $req = "DELETE FROM todo WHERE id=" . $_POST['id'].";";
            $req = $DBconnect->prepare($req);
            $req->execute();

            echo json_encode([
                "code" => 200,
                "message" => "suppression faite"
            ]);
        break;

    }
    
} else {
    $req = "SELECT id, task, done FROM todo";
    $data = $DBconnect->query($req)->fetchAll(PDO::FETCH_ASSOC);
  
    echo json_encode($data);
    
}