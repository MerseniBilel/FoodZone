<?php
    include 'dash_classes/admin.class.php';

    if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $name = $_POST['name'];
      $password = $_POST['password'];
      $passwordc = $_POST['passwordagain'];
      $phone = $_POST['phone'];
      $type = $_POST['type'];
      
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_error = "Not A Valid Email";
        goto prob;
    }


    if(strlen($phone) < 8) {
      $phone_error = "your phone must be 8 Characters";
      goto prob;
    }

    if(strlen($password) < 6) {
      $password_error = "Password Must Be 6 Characters";
      goto prob;
    }

    if($password != $passwordc) {
      $cpassword_error = "Password and Confirm Password doesn't match";
      goto prob;
    }

    if($type == "Select type"){
      $type_error = "You must select a type";
      goto prob;
    }
    $admin = new Adminstrator;

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $rep = $admin->add_emplye($name,$phone,$email,$hashed_password,$type);
    if($rep){
      $admin->send_email($name,$email,$password);
      echo "<script>window.location.assign('index.php')</script>";
    }

    }
  prob:
include 'add_empl.phtml';