<?php
include "dash_classes/product.class.php";
if(!empty($_POST)){
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    $type =$_POST['type'];


if($_FILES['pic']['name']!=null){
    $productpic = time() . '_' . $_FILES['pic']['name'];
    $target = '../uploads/' . $productpic;
    move_uploaded_file($_FILES['pic']['tmp_name'], $target); 
    }else {
        $file_error = "You must select a file !";
        goto err;
    }

    if($desc ==""){
        $desc_error = "You need a product description";
        goto err;
    }

    if($type=="none"){
        $type_error = "you need a product type";
        goto err;
    }


    $produit = new Produit;
    $rep = $produit->addNewProduct($name,$price,$desc,$productpic,$type);
}

err:
include "product.phtml";
