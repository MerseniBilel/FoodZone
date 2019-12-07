<?php
require 'dash_classes/product.class.php';
$product = new Produit;
if(!empty($_GET)){
    var_dump($_GET);
    $res = $product->deleteprod($_GET['id']);
    if($res){
        header('location:listproduct.php');
    }
    
}else{
    header('location:listproduct.php');
}
