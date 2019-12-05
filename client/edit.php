<?php
session_start();
include 'class/client.class.php';

if(isset($_POST['update'])){
if(!empty($_POST)){
$nom=$_POST['nom'];
$adresse=$_POST['adresse'];
$tel=$_POST['tel'];
$mdp=$_POST['mdp'];
$mdp2=$_POST['mdp2'];
$email = $_SESSION['email'];

if($_FILES['profpic']['name']!=null){
    $profilpic = time() . '_' . $_FILES['profpic']['name'];
    $target = 'profilpic/' . $profilpic;
    move_uploaded_file($_FILES['profpic']['tmp_name'], $target); 
    }else{
    $target = $_SESSION['img'];}

if (!preg_match("/^[a-zA-Z0-9 ]+$/",$nom)) {
    $name_error = "Name must contain only letters, numbers and space.";
    header('location:profil.php?name_error='.$name_error.'');
    exit();
}


if(strlen($mdp)<6){
    $mdp1_error = "Password must be more than 6 caracters.";
    header('location:profil.php?mdp1_error='.$mdp1_error.'');
    exit();
}

if($mdp!=$mdp2){
    $mdp2_error = "Password and Confirm password not much.";
    header('location:profil.php?mdp2_error='.$mdp2_error.'');
    exit();
}

$client = new Client;
$hashed_password = password_hash($mdp, PASSWORD_DEFAULT);
$rep = $client->updateClient($email,$nom, $adresse,$tel,$hashed_password,$target);

            $_SESSION['name'] = $_POST['nom'];
            $_SESSION['tel'] = $_POST['tel'];
            $_SESSION['adr'] = $_POST['adresse'];
            $_SESSION['img'] = $target;
header('location:../index.php?success=modified');

}}


if(isset($_POST['delete'])){
    $email = $_SESSION['email'];
    $client = new Client;
    $client->deleteClient($email);
    header('Location:logout.php?logout');
}

?>