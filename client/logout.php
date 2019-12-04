<?php 

    if (isset($_GET['logout']))
    {   
        session_start();
        session_destroy();
        unset($_SESSION['name']);
        header('location:index.php');
    }else{
        header('location:index.php');
    }
?>