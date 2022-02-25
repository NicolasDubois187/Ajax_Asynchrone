<?php

require_once("helper.php");
require_once("User.php");


if($_POST) {
   
    $data = [
        "name" =>"",
        "phone" => "",
        "email" => "",
        "address" => ""
    ];
    
    $sendingEmail = $_POST['email'];
    $sendingPwd = $_POST['password'];

    if($sendingEmail === $data['email'] && $sendingPwd === $data['password']) {
        $response = [
            'statue' => 200,
            'data'=> $data
        ];

    } else {
        $response = [
            'statue' => 202,
            'data' => 'Mauvais identifiant ou Mdp !'
        ];
    }
    echo json_encode($response);
}

?>