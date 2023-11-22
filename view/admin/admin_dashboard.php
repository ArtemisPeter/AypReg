<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <?php require ('../../dbcon.php') ?>

  <style>
  .bg-orange{
    background-color: orange;
  }
  .bg-pink{
    background-color: pink;
  }
</style>
  <style>
    #TotalDel{
      font-family:'Times New Roman', Times, serif;
      font-size: 7rem;
      font-weight: bold;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../dist/img/aypLogo.jpg" alt="AdminLTELogo" height="400" width="400">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

            <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="../../dist/img/aypLogo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Alliance YP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php 
            if(isset($_SESSION['UserName'])){
              echo $_SESSION['UserName'];
            }else{
              echo "<script>window.location:'../../index.php'</script>";
            }
          ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="churchProfile.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                Church Profile
              </p>
            </a>
          </li>
          <li class="nav-item active">
            <a href="registrar_dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Register
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reports.php" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Reports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="about_us.php" class="nav-link">
            <i class="nav-icon fas fa-user-secret"></i>
              <p>
                About us
              </p>
            </a>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-navy ">
              <div class="card-body">
              <div class="col-md-6 mx-auto d-flex justify-content-center align-items-center">
                <div class="text-center">
                <?php 
                  $GetTotal = "SELECT COUNT(*) AS total FROM tbl_delegate;";
                  $Total = $con->query($GetTotal);

                  if($Total -> num_rows > 0){
                    $TDel = $Total -> fetch_assoc();
                    $OverAll = $TDel['total'];
                  }
                ?>
                    <p id="TotalDel" class="m-0"><?php echo $OverAll ?></p>
                    <p class="mb-0" style="font-size: 2rem">Registered Delegates </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-pink">
              <div class="inner ">
              <?php 
                  $GetMalungon = "SELECT COUNT(*) AS MCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Malungon Circuit';";
                  $TotalMC = $con->query($GetMalungon);

                  if($TotalMC -> num_rows > 0){
                    $TMC = $TotalMC -> fetch_assoc();
                    $OverMC = $TMC['MCircuit'];
                  }
                ?>
                <h3><?php echo $OverMC ?></h3>
                <p>Malungon Circuit</p>
              </div>
              
              <div class="icon">
              <i class="fab fa-medium-m"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <?php 
                  $GetGensan = "SELECT COUNT(*) AS MCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Gensan Circuit';";
                  $TotalGC = $con->query($GetGensan);

                  if($TotalGC -> num_rows > 0){
                    $TGC = $TotalGC -> fetch_assoc();
                    $OverGC = $TGC['MCircuit'];
                  }
                ?>
              <div class="inner ">
                <h3><?php echo $OverGC ?></h3>
                <p>Gensan Circuit</p>
              </div>
              
              <div class="icon">
              <i class="fab fa-google"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner ">
              <?php 
                  $GetPolomolok = "SELECT COUNT(*) AS PCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Polomolok Circuit';";
                  $TotalPC = $con->query($GetPolomolok);

                  if($TotalPC -> num_rows > 0){
                    $TPC = $TotalPC -> fetch_assoc();
                    $OverPC = $TPC['PCircuit'];
                  }
                ?>
                <h3><?php echo $OverPC ?></h3>
                <p>Polomolok Circuit</p>
              </div>
              
              <div class="icon">
              <i class="fab fa-product-hunt"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner ">
              <?php 
                  $GetTuTam = "SELECT COUNT(*) AS TCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'TuTam Circuit';";
                  $TotalTC = $con->query($GetTuTam);

                  if($TotalTC -> num_rows > 0){
                    $TTC = $TotalTC -> fetch_assoc();
                    $OverTC = $TTC['TCircuit'];
                  }
                ?>
                <h3><?php echo $OverTC ?></h3>
                <p>TuTam Circuit</p>
              </div>
              
              <div class="icon">
              <i class="fab fa-tumblr"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner ">
              <?php 
                  $GetKorLuTan = "SELECT COUNT(*) AS KCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'KorLuTan Circuit';";
                  $TotalKC = $con->query($GetKorLuTan);

                  if($TotalKC -> num_rows > 0){
                    $TKC = $TotalKC -> fetch_assoc();
                    $OverKC = $TKC['KCircuit'];
                  }
                ?>
                <h3><?php echo $OverKC ?></h3>
                <p>KorLuTan Circuit</p>
              </div>
              
              <div class="icon">
              <i class="fab fa-korvue"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner ">
              <?php 
                  $GetBanga = "SELECT COUNT(*) AS BCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Banga Circuit';";
                  $TotalBC = $con->query($GetBanga);

                  if($TotalBC -> num_rows > 0){
                    $TBC = $TotalBC -> fetch_assoc();
                    $OverBC = $TBC['BCircuit'];
                  }
                ?>
                <h3><?php echo $OverBC ?></h3>
                <p>Banga Circuit</p>
              </div>
              
              <div class="icon">
              <i class="fas fa-bold"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner ">
              <?php 
                  $GetSurallah = "SELECT COUNT(*) AS SCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Surallah Circuit';";
                  $TotalSC = $con->query($GetSurallah);

                  if($TotalSC -> num_rows > 0){
                    $TSC = $TotalSC -> fetch_assoc();
                    $OverSC = $TSC['SCircuit'];
                  }
                ?>
                <h3><?php echo $OverSC ?></h3>
                <p>Surallah Circuit</p>
              </div>
              
              <div class="icon">
              <i class="fas fa-strikethrough"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner ">
              <?php 
                  $GetNorSan = "SELECT COUNT(*) AS NCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'NorSan Circuit';";
                  $TotalNC = $con->query($GetNorSan);

                  if($TotalNC -> num_rows > 0){
                    $TNC = $TotalNC -> fetch_assoc();
                    $OverNC = $TNC['NCircuit'];
                  }
                ?>
                <h3><?php echo $OverNC ?></h3>
                <p>NorSan Circuit</p>
              </div>
              
              <div class="icon">
              <i class="fab fa-neos" style="color: #000000;"></i>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
</body>
</html>
