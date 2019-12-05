<?php 
session_start(); 
if (isset($_SESSION['name']) != ""){
    header('location:../index.php');
}
?>
<html>
    <head>
    <title>Signup</title>
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/loginc.css" class="css">
    <link rel="stylesheet" href="../css/style.css" class="css">
    </head>
    <body>
   

      <div class="container">
      <div class="shadow-lg bg-white rounded testmarg">
      <form action="create.php" method="POST" enctype="multipart/form-data">
      <div class="text-center">
      <img src="../img/logo.png" alt="FoodZone"><br><br>
          <h1>Create your account</h1><br><br>
          </div>
            <div class="form-group">
            <label for="nom"> Name </label>
            <input type="text" name="nom" placeholder="Your name*" class="form-control" required>
            <span class="text-danger"><?= @$_GET['name_error']; ?></span>  
            </div>

            <div class="form-group">
            <label for="tel"> Phone </label>
            <input type="text" name="tel" placeholder="Your phone*" class="form-control" required>
            <span class="text-danger"><?= @$_GET['tel_error']; ?></span>  
            </div>

            <div class="form-group">
            <label for="adresse"> Adresse </label>
            <input type="text" name="adresse" placeholder="Your adresse*" class="form-control" required>
            </div>

            <div class="form-group">
            <label for="email"> Email </label>
            <input type="text" name="email" placeholder="example@example.com*" class="form-control" required>
            <span class="text-danger"><?= @$_GET['email_error']; ?></span>  
            </div>

            <div class="form-group">
            <label for="mdp"> Password </label>
            <input type="password" name="mdp" placeholder="Password*" class="form-control" required>
            <span class="text-danger"><?= @$_GET['mdp1_error']; ?></span>  
            </div>

            <div class="form-group">
            <label for="mdp2"> Confirm Password </label>
            <input type="password" name="mdp2" placeholder="Confirm Password*" class="form-control" required>
            <span class="text-danger"><?= @$_GET['mdp2_error']; ?></span>  
            </div>

            <div class="form-group">
            <label for="profpic"> Profil Pic </label>
            <input type="file" name="profpic" class="form-control">
            </div>

            <div>
            <button  type="submit" class="btn btn-primary btn-shadow btn-lg" >Valider</button>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            </form>
      </div>
      </div>
      <script src="../bootstrap4/js/bootstrap.min.js"></script>
            </body>
</html>