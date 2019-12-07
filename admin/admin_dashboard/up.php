<?php
require 'dash_classes/product.class.php';
$product = new Produit;
if(!empty($_POST)){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $pid = $_GET['id'];
    $res = $product->updateProduct($name,$price,$desc,$pid);
    if($res){
        header('location:listproduct.php');
    }
    
}else{
    header('location:listproduct.php');
}

