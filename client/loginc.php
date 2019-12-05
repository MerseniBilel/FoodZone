<?php 
session_start(); 
if (isset($_SESSION['name']) != ""){
    header('location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css" class="css">
    <link rel="stylesheet" href="../css/loginc.css" class="css">
    <link rel="stylesheet" href="../css/style.css" class="css">
</head>
<body>
    <div class="text-center">
<?php
if(@$_GET['success'] == 'create') {?>
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> The customer is created successfully.
        </div>
    <?php } 

if(@$_GET['error'] == 'wrong') {?>
        <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Wrong!</strong> The email and password you entered did not match our records. Please double-check and try again.
        </div>
    <?php } ?>
    </div>

    <div class="container">
    <div class="shadow-lg bg-white rounded testmarg">
    <form name="login" method="POST" action="verifloginc.php">
    <div class="text-center">
    <img src="../img/logo.png" alt=""><br><br>
    <h1>Log in to Food Zone</h1><br><br>
    </div>
        <span class="text-danger"><?= @$_GET['msg'] ?></span><br>
        <div>
        <label for="email">Email</label><br>
        <input class="form-control" type="text" name="email" placeholder="example@example.com" required><br>
        </div>
        <div>
        <label for="mdp">Password</label><br>
        <input class="form-control" type="password" name="mdp" placeholder="********" required><br>
        </div>
        <div class="mb-2">
        <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Log in</button><br><br>
        </div>
        <p>New around here? <a href="register.php">sign up now »</a></p>
    </form>
    </div>
    </div>
</body>
</html>