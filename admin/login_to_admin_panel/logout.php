<?php
session_start();
var_dump($_SESSION);
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['type']);
header('location:admin.php');