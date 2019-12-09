<?php
require 'panier/classes/pnaier.class.php';

if(!empty($_POST)){
    $str = $_POST['product'];
    $prod_id = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
    session_start();
    $cid= $_SESSION['cid'];
    $panier = new Panier;
    $res = $panier->getInfo($prod_id);
    $data = $res->fetch();
    $inser = $panier->intoPanier("1",$data['pid'],$cid);
  
    $badge = $panier->getBadge();
    $badgedata = $badge->fetch();
    
    
    echo $badgedata['total'];   
}

?>