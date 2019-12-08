
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>add car</title>

  <link href="../../style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  
  <link href="../../style/css/sb-admin.css" rel="stylesheet">

</head>
<body class="bg-light">

  <div class="container" style="padding: 9%;">
  <div class="container">
        <div class="jumbotron shadow p-3 mb-5 bg-white rounded" style="border-radius:20px;">
        <h1 class="text-center">Liste de véhicules : </h1>
    </div>
    <div class="card card-register mx-auto mt-5">
      <div class="card-header text-center"><img src="logo.png" alt="logo"></div>
      <div class="card-body">
        <form action="store.php" method="post">

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="status" name="status" class="form-control" placeholder="car status" required="required">
              <!-- el required heya eli etla3li le message kif m nktb shy fel formulair! -->
              <label for="status">car status</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="mat" name="vehiculenumber" class="form-control" placeholder="matricul" required="required">
              <label for="mat">matricul</label>
            </div>
          </div>

          
          <button type="submit" class="btn btn-danger btn-block" name="submit">Submit</button>
        </form>
        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
