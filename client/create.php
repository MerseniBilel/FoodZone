<?php
include 'dbconnexion.php';

$nom=$_POST['nom'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];
$mdp=$_POST['mdp'];
$rep= $cnx ->query("SELECT * FROM customer WHERE email='$email'");
$data = $rep->fetch();
if($data==null){
$nb = $cnx->exec("INSERT INTO customer(name,email,pwd,phnno,adresse) 
VALUES ('$nom','$email','$mdp','$tel','$adresse')");
header('Location: loginc.php');
}
else
header("Location: http://localhost/foodzone/register.php?msg=This email has already an acount");
?>