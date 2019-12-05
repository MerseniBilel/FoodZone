<?php 
session_start(); 
if (isset($_SESSION['name']) == ""){
    header('location:../index.php');
}
?>

<html>
    <head>
    <title>Profil</title>
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/loginc.css" class="css">
    <link rel="stylesheet" href="../css/style.css" class="css">
    </head>
    <body>
   

      <div class="container">
      <div class="shadow-lg bg-white rounded testmarg">
      <form action="edit.php" method="POST" enctype="multipart/form-data">
      <div class="text-center">
      <img src="../img/logo.png" alt="FoodZone"><br><br>
          <h1>Modify your account</h1><br><br>
          </div>
            <div class="form-group">
            <label for="nom"> Name </label>
            <input type="text" name="nom" placeholder="Your name*" value="<?php echo $_SESSION['name']; ?>" class="form-control" required>
            <span class="text-danger"><?= @$_GET['name_error']; ?></span>  
            </div>

            <div class="form-group">
            <label for="tel"> Phone </label>
            <input type="text" name="tel" placeholder="Your phone*" value="<?php echo $_SESSION['tel']; ?>" class="form-control" required>
            <span class="text-danger"><?= @$_GET['tel_error']; ?></span>  
            </div>

            <div class="form-group">
            <label for="adresse"> Adresse </label>
            <input type="text" name="adresse" placeholder="Your adresse*" value="<?php echo $_SESSION['adr']; ?>" class="form-control" required>
            </div>

            <div class="form-group">
            <label for="mdp"> Password </label>
            <input type="password" name="mdp" placeholder="Password*" class="form-control" >
            <span class="text-danger"><?= @$_GET['mdp1_error']; ?></span>  
            </div>

            <div class="form-group">
            <label for="mdp2"> Confirm Password </label>
            <input type="password" name="mdp2" placeholder="Confirm Password*" class="form-control" >
            <span class="text-danger"><?= @$_GET['mdp2_error']; ?></span>  
            </div>

            <div class="form-group">
            <label for="profpic"> Profil Pic </label>
            <input type="file" name="profpic" class="form-control">
            </div>

            <div>
            <button  type="submit" class="btn btn-primary btn-shadow btn-lg" name="update" >Valider</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
            <button  type="submit" class="btn btn-primary btn-shadow btn-lg" name="delete" >Delete Account</button>
            </div>
            </form>
      </div>
      </div>
      <script src="../bootstrap4/js/bootstrap.min.js"></script>
            </body>
</html>