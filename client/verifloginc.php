<?php

include 'class/client.class.php';

if(!empty($_POST)){
    
$email=$_POST['email'];
$mdp=$_POST['mdp'];

$test = new Client;
$x = $test->verifCnx($email,$mdp);
$data = $x->fetchAll();
if ($data!=null){
    session_start();    
    $_SESSION['user']=$email;
    header('Location:index.php?success=done');
}
else{
header('Location:loginc.php?error=wrong');
}
}


?>