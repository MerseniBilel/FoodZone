<?php 

    if (isset($_GET['logout']))
    {   
        session_start();
        session_destroy();
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['tel']);
        unset($_SESSION['adresse']);
        unset($_SESSION['img']);
        header('location:../index.php');
    }else{
        header('location:../index.php');
    }
?>