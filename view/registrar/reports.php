<?php session_start() ?>
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

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <?php require ('../../dbcon.php') ?>

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
            if (!isset($_SESSION['UserName'])) {
                session_destroy(); // Destroy the session
                header('Location: ../../index.php'); // Redirect to index.php
                exit(); // Stop executing the rest of the code
            }

            echo $_SESSION['UserName']; // Display the username
          ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item">
            <a href="dashboard.php" class="nav-link ">
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
          <li class="nav-item active">
            <a href="reports.php" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Reports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-upload"></i>
              <p>Import<i class="fas fa-angle-left right"></i></p></a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="registrar_import_prereg.php" class="nav-link">
                    <i class="fas fa-registered"></i>
                    <p>Pre-Reg</p>
                  </a>
                </li>
                                    
                <li class="nav-item">
                  <a href="registrart_import_YP.php" class="nav-link">
                    <i class="far fa-registered"></i>
                    <p>Young People</p>
                  </a>
                </li>
              </ul>
            </li>
          <li class="nav-item">
            <a href="about_us.php" class="nav-link">
            <i class="nav-icon fas fa-user-secret"></i>
              <p>
                About us
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../index.php" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
                Log Out
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
            <h1 class="m-0">Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Report</li>
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
              <h1>Print Area</h1>
                  
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Total Delegates</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="TotalDelPie" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <div class="col-md-6">
          <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Registration</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="RegPie" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="row">
      <div class="col-md-6">
          <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Total Ages</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="TotalAgesPie" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
      <div class="col-md-6">
      <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Registration Per Day</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="RegPerDayBar" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
      </div>
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
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script>
  <?php

  $GetMalungon = "SELECT COUNT(*) AS MCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Malungon Circuit';";
                  $TotalMC = $con->query($GetMalungon);

                  if($TotalMC -> num_rows > 0){
                    $TMC = $TotalMC -> fetch_assoc();
                    $OverMC = $TMC['MCircuit'];
                  };
                  
                  $GetGensan = "SELECT COUNT(*) AS MCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Gensan Circuit';";
                  $TotalGC = $con->query($GetGensan);

                  if($TotalGC -> num_rows > 0){
                    $TGC = $TotalGC -> fetch_assoc();
                    $OverGC = $TGC['MCircuit'];
                  };
  
                  $GetPolomolok = "SELECT COUNT(*) AS PCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Polomolok Circuit';";
                  $TotalPC = $con->query($GetPolomolok);

                  if($TotalPC -> num_rows > 0){
                    $TPC = $TotalPC -> fetch_assoc();
                    $OverPC = $TPC['PCircuit'];
                  };

                  $GetTuTam = "SELECT COUNT(*) AS TCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'TuTam Circuit';";
                  $TotalTC = $con->query($GetTuTam);

                  if($TotalTC -> num_rows > 0){
                    $TTC = $TotalTC -> fetch_assoc();
                    $OverTC = $TTC['TCircuit'];
                  };

                  $GetKorLuTan = "SELECT COUNT(*) AS KCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'KorLuTan Circuit';";
                  $TotalKC = $con->query($GetKorLuTan);

                  if($TotalKC -> num_rows > 0){
                    $TKC = $TotalKC -> fetch_assoc();
                    $OverKC = $TKC['KCircuit'];
                  };

                  $GetBanga = "SELECT COUNT(*) AS BCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Banga Circuit';";
                  $TotalBC = $con->query($GetBanga);

                  if($TotalBC -> num_rows > 0){
                    $TBC = $TotalBC -> fetch_assoc();
                    $OverBC = $TBC['BCircuit'];
                  };

                  $GetSurallah = "SELECT COUNT(*) AS SCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Surallah Circuit';";
                  $TotalSC = $con->query($GetSurallah);

                  if($TotalSC -> num_rows > 0){
                    $TSC = $TotalSC -> fetch_assoc();
                    $OverSC = $TSC['SCircuit'];
                  };

    $GetNorSan = "SELECT COUNT(*) AS NCircuit FROM tbl_delegate INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
                  INNER JOIN tbl_church ON tbl_yp.church_id = tbl_church.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = 
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'NorSan Circuit';";
                  $TotalNC = $con->query($GetNorSan);

                  if($TotalNC -> num_rows > 0){
                    $TNC = $TotalNC -> fetch_assoc();
                    $OverNC = $TNC['NCircuit'];
                  };

                  $GetTotalPreReg = "SELECT COUNT(*) AS PreReg FROM tbl_delegate WHERE tbl_delegate.RegType_id = 1;";
                  $PreReg = $con ->  query($GetTotalPreReg);

                  if($PreReg -> num_rows > 0){
                    $PRG = $PreReg -> fetch_assoc();
                    $TotalPreReg = $PRG['PreReg'];
                  }

                  $GetTotalOnReg = "SELECT COUNT(*) AS OnReg FROM tbl_delegate WHERE tbl_delegate.RegType_id = 2;";
                  $OnReg = $con ->  query($GetTotalOnReg);

                  if($OnReg -> num_rows > 0){
                    $ORG = $OnReg -> fetch_assoc();
                    $TotalOnReg = $ORG['OnReg'];
                  }
  
  ?>
$(()=> {
  var Circuit = {
    labels: [
      'Malungon Circuit',
      'Gensan Circuit',
      'Polomolok Circuit',
      'TuTam Circuit',
      'KorLuTan Circuit',
      'Banga Circuit',
      'Surallah Circuit',
      'NorSam Circuit'
    ],
    datasets: [
      {
        data: [<?php echo $OverMC ?>,<?php echo $OverGC ?>,<?php echo $OverPC ?>,<?php echo $OverTC ?>,<?php echo $OverKC ?>,<?php echo $OverBC ?>,<?php echo $OverSC ?>,<?php echo $OverNC ?>],
        backgroundColor: ['#F8C8DC', '#fdfd96','#FF6961', '#77DD77', '#FF5733', '#1D1C1A', '#AEC6CF', '#EDE9E8']
      }
    ]
  }

  var totalDelCanvas = $('#TotalDelPie').get(0).getContext('2d')
  var pieData = Circuit;
  var pieOptions = {
    maintanAspectRatio :false,
    responsive : true,
  }

  new Chart(totalDelCanvas, {
    type: 'pie',
    data: pieData,
    options :pieOptions
  });

  var Registration_Type = {
    labels: [
      'Pre-Reg',
      'On-Site',
    ],
    datasets: [
      {
        data: [<?php echo $TotalPreReg ?>, <?php echo $TotalOnReg ?>],
        backgroundColor: ['#FF6961','#AEC6CF', ]
      }
    ]
  }

  var totalRegCanvas = $('#RegPie').get(0).getContext('2d')
  var pieData = Registration_Type;
  var pieOptions = {
    maintanAspectRatio :false,
    responsive : true,
  }

  new Chart(totalRegCanvas, {
    type: 'pie',
    data: pieData,
    options :pieOptions
  });
});


</script>

</body>
</html>
