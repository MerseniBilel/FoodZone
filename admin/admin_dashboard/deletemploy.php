<?php
require 'dash_classes/admin.class.php';
$admin = new  Adminstrator;
$res = $admin->delete_employ($_GET['id']);
if($res){
    header('location:listemploys.php');
}

