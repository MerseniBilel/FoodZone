<?php
session_start();
include 'dbconnexion.php';
$email=$_POST['email'];
$mdp=$_POST['mdp'];

$rep= $cnx ->query("SELECT * FROM customer WHERE email='$email' and pwd='$mdp'");
$data = $rep->fetch();

if($data!=null){
    $_SESSION['user']=$email;
    header('Location: http://localhost/foodzone/home.php');}
else
    {
        header('Location: http://localhost/foodzone/loginc.php?msg=Please enter correct email and password');}
?>