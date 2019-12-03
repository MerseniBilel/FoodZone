<?php
include 'dbconnection.php';

$vid=$_POST['vid'];
$status=$_POST['status'];
$vehiculenumber=$_POST['vehiculenumber'];

$reponse = $bdd->prepare('INSERT INTO véhicule(vid , status, vehiculenumber) 
VALUES (:param_vid,:param_status,:param_vehiculenumber)'
);


$reponse->bindParam(':param_vid',$vid);
$reponse->bindParam(':param_status',$status);
$reponse->bindParam(':param_vehiculenumber',$vehiculenumber);

$reponse->execute();
if($reponse){
    header('location:index.php'); //kif tbda e rep shiha yt3ada toul lel index.html
}

?>
