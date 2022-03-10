<?php

$db = 'mysql:host=127.0.0.1;dbname=exo_myblog';
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
    'title' => secure($_POST['title']),
    'author' => secure($_POST['author']),
    'content' => secure($_POST['content']),
  ];

  $req = $DBconnect->prepare('INSERT INTO posts(title, author, content) VALUES(:title, :author, :content)');

  $req->execute($data);

 echo json_encode($data);
  
} else {
  $req = "SELECT title, author, content FROM posts";
  $data = $DBconnect->query($req)->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($data);


}