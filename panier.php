<?php
require 'panier/classes/pnaier.class.php';


$str = $_POST['product'];
$prod_id = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);

$cid="1";

$panier = new Panier;
$res = $panier->getInfo($prod_id);

$data = $res->fetch();

$badge = $panier->getBadge();

$badgedata = $badge->fetch();


$inser = $panier->intoPanier("1",$data['pid'],$cid);

echo $badgedata['total']+1;

?>