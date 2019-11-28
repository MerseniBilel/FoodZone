<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" class="css">
</head>
<body class="text-center">
    <?php 
    
        if(@$_GET['msg']==true)
        {
    ?>
        <script>alert('<?= $_GET['msg']?>');</script>
    <?php
        }
    ?>
    <div class="container">
    <div class="shadow-lg p-3 mb-5 bg-white rounded p-5 m-5">
    <form name="login" method="POST" action="verifloginc.php">
    <img src="logo.png" alt=""><br><br>
    <h1>Log in to Food Zone</h1><br><br>
        <label for="email">Email</label><br>
        <input style="text-align:center" class="form-control" type="text" name="email" placeholder="example@example.com" required><br>
        <label for="mdp">Password</label><br>
        <input style="text-align:center" class="form-control" type="password" name="mdp" placeholder="********" required><br>
        <button class="btn btn-primary" type="submit">Log in</button><br><br><br>
        <p>New around here? <a href="register.php">sign up now »</a></p>
    </form>
    </div>
    </div>
</body>
</html>