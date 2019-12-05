<?php

$pass = 'foodzoneadmin';
// $2y$10$bhZgfD5jh22aUimjxwvkZue8BsM2SVgCAvJmJFARKfp16XVcA2UnK

//session_start();
    include 'classes/admin.class.php';
    session_start();
    if(isset($_SESSION['email'])!="") {
        if($_SESSION['type'] == "admin"){
            header("Location: ../admin_dashboard/index.php");
        }else{
            header("Location: ../empl_dashboard/index.php");
        }
    }

   if (isset($_POST['admin'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Not A Valid Email";
            goto prob;
        }

        if(strlen($password) < 6) {
            $password_error = "Password Must Be 6 Characters";
            goto prob;
        }
        
        $admin = new Admin;
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $rep = $admin->login($email, $password);
        if($rep === false)
        {
            $auth_error = 'Incorrect Email or Password!!!';
        } else {
            session_start();
            $_SESSION['email'] = $rep['email'];
            $_SESSION['type'] = $rep['type'];

            var_dump($_SESSION);
            if($rep['type'] =="admin"){
                header("Location: ../admin_dashboard/index.php");
            }else{
                header("Location: ../empl_dashboard/index.php");
            }
        }
    }

    prob:

include 'admin_panel.phtml';