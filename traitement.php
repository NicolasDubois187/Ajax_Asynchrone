<?php

if($_POST) {
    // On va simuler une connexion à notre BD et un retour de data
    $data = [
        "email" =>"toto@mail.fr",
        "pseudo" => "Toto",
        "password" => "1234", // NE JAMAIS FAIRE !!!!!!!!!!!!!!!!!!
        // *On ne stock JAMAIS un password en clair !!!!!!!!
        "age" => 24,
        "adresse" => "1 rue du code"
    ];
    
    // NE JAMAIS FAIRE !!!!!!!!!!!!!!!!!!
    // *On sécurise TOUJOURS nos entrées users
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