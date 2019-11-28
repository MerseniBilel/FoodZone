<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="background.css" class="css">
</head>
<body class="bg-i">
<?php
session_start();
if(isset($_SESSION['user']))
{
    echo 'Hello '.$_SESSION['user'];
    echo '<a href="logout.php?logout">Logout</a>';
}
else{
    header('location:loginc.php');
}
?>

</body>
</html>
