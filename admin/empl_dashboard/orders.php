<!DOCTYPE html>
<html lang="en">
<?php
require 'dash_classes/admin.class.php';
session_start();
if(isset($_SESSION['email']) == ""){
  header('location:../login_to_admin_panel/admin.php');
}
$emp = new Adminstrator;
$res = $emp->list_orders();

$res2 = $emp->number_of_orders();
$data2 = $res2->fetch();

?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../style/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../style/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-light static-top"  style="background-color: #F4EDE5;">

    <a class="navbar-brand mr-1" href="index.php"><img style="width:40px;height:30px;" src="../style/img/logo.png" alt=""></a>



    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-danger" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="add_empl.php">add employe</a>
          <a class="dropdown-item" href="product.php">Add product</a>
          <a class="dropdown-item" href="cars.php">Add car</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

 </nav>
  <!-- Breadcrumbs-->
  <ol class="breadcrumb mt-2">
    <li class="breadcrumb-item">
      <a href="index.php">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>
  
  <div id="wrapper">

    <div id="content-wrapper">

      <div class="container-fluid">


      <div class="container">
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $data2['orders'] ;?> Order</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="orders.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">List of product</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="listproduct.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


        </div>
      </div>



        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Employs</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>qty</th>
                    <th>status</th>
                    <th>prod id</th>
                    <th>person id</th>
                  </tr>
                </thead>
                <tbody>
                <?php while($data = $res->fetch())
                {    
                ?>
                  <tr>
                    <td><?php echo $data['oid'];?></td>
                    <td><?php echo $data['qty'];?></td>
                    <td><?php echo $data['status'];?></td>
                    <td><?php echo $data['pid'];?></td>
                    <td><?php echo $data['cid'];?></td>
                  </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
          </div>
          
        </div>

      </div>
      <!-- /.container-fluid -->


    </div>
    <!-- /.content-wrapper -->

  </div>

  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../login_to_admin_panel/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../style/vendor/jquery/jquery.min.js"></script>
  <script src="../style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../style/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../style/vendor/chart.js/Chart.min.js"></script>
  <script src="../style/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../style/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../style/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../style/js/demo/datatables-demo.js"></script>
  <script src="../style/js/demo/chart-area-demo.js"></script>

</body>

</html>
