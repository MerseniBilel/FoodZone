<?php 
include 'dbconnection.php';

$vid=$_GET['vid'];
$reponse = $bdd->prepare('DELETE FROM véhicule WHERE vid=:vid');
$reponse->bindParam(':vid',$vid);
 $reponse->execute(); 
 if($reponse){
    header('location:index.php'); //kif tbda e rep shiha yt3ada toul lel index.html
}

?>