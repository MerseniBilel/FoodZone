<?php
require "panier/classes/pnaier.class.php";

$panier = new Panier;
$res = $panier->delete_panier($_GET['id']);
if($res){
    header('location:listepanier.php');
}