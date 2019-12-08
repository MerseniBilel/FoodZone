<?php
require "panier/classes/pnaier.class.php";
$panier = new Panier;
$st = "1";
$res = $panier->whatinpanier();
while($data = $res->fetch()){
    $res2 = $panier->insertinto_order($data['qty'],$st,$data['pid'],$data['cid']);
}

$res3 = $panier->resetpanier();

header('location:index.php?checkout=done');

?>