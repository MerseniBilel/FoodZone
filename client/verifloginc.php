<?php

include 'class/client.class.php';

if(!empty($_POST)){
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];


    $client = new Client;
    $x = $client->verifCnx($email);
    
    if ($data = $x->fetch()){
        if(password_verify($mdp,$data['pwd'])){
            session_start(); 
            $_SESSION['name'] = $data['name'];
            $_SESSION['img'] = $data['img'];
           header('Location:index.php?success=done');
    }
}
else{
    header('Location:loginc.php?error=wrong');
}
}