<?php

include 'class/client.class.php';

if(!empty($_POST)){
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];


    $client = new Client;
    $x = $client->verifExist($email);
    
    if ($data = $x->fetch()){
        if(password_verify($mdp,$data['pwd'])){
            session_start(); 
            $_SESSION['cid'] = $data['cid'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['tel'] = $data['phonenumber'];
            $_SESSION['adr'] = $data['adresse'];
            $_SESSION['img'] = $data['img'];
           header('Location:../index.php?success=done');
    }else{
        header('Location:loginc.php?error=wrong');
    }
}else{
    header('Location:loginc.php?error=wrong');
}
}