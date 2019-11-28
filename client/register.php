<html>
    <head>
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
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
<form name="f" method="POST" action="create.php">
      <img src="logo.png" alt=""><br><br>
          <h1 style="text-align:center">Create your account</h1><br><br>
            <div class="form-group">
            <label for="nom"> Name </label>
            <input style="text-align:center" type="text" name="nom" placeholder="Your name*" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="tel"> Phone </label>
            <input style="text-align:center" type="text" name="tel" placeholder="Your phone*" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="adresse"> Adresse </label>
            <input style="text-align:center" type="text" name="adresse" placeholder="Your adresse*" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="email"> Email </label>
            <input style="text-align:center" type="text" name="email" placeholder="example@example.com*" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="mdp"> Password </label>
            <input style="text-align:center" type="password" name="mdp" placeholder="Password*" class="form-control" required>
            </div>
            <div style="text-align:center">
            <button  type="submit" class="btn btn-primary" >Valider</button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button  type="reset" class="btn btn-danger" >Annuler</button>
            </div>
            </form>
      </div></div>
      <script src="bootstrap4/js/bootstrap.min.js"></script>
            </body>
</html>