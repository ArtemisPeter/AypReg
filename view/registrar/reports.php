<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reports</title>
  <link rel="icon" type="image/x-icon" href="../../dist/img/aypLogo.jpg">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>

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
          <li class="nav-item active">
            <a href="churchProfile.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                Registered Profile
              </p>
            </a>
          </li>
          <li class="nav-item active">
            <a href="listYP.php" class="nav-link">
            <i class="nav-icon fas fa-list-ul"></i>
              <p>
                YP Profile
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="registrar_dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Register On-site
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-upload"></i>
              <p>Import<i class="fas fa-angle-left right"></i></p></a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="registrar_import_prereg.php" class="nav-link">
                  <i class="nav-icon fas fa-globe-asia"></i>
                    <p>Pre-Reg</p>
                  </a>
                </li>
                                    
                <li class="nav-item">
                  <a href="registrart_import_YP.php" class="nav-link">
                  <i class="nav-icon fas fa-map-marker-alt"></i>
                    <p>OnSite</p>
                  </a>
                </li>
              </ul>
            </li>
          <li class="nav-item">
            <a href="reports.php" class="nav-link active">
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
          <li class="nav-item">
            <a href="../../index.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
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
                <form action="../../controller/GenerateID.php" method="POST" target="_blank">
                <div class="row">
                  <div class="col-3">
                  <select class="select2bs4 form-control" name="Circuit" id="Circuit" required>
                                          <option disabled selected>Select Circuit</option>
                                            <?php 
                                              $getCircuit = "SELECT tbl_circuit.Circuit FROM tbl_circuit";
                                              $Circuit = $con -> query($getCircuit);

                                              if($Circuit){
                                                foreach($Circuit AS $row){
                                            ?>
                                            <option><?php echo $row['Circuit']; }}?></option>
                                        </select>
                  </div>
                  <div class="col-3">
                  <select class="select2bs4 form-control" id="Church" name="Church" required>
                                            <option disabled selected>Select Church</option>
                                          </select>
                  </div>
                  <div class="col-3">
                    <select class="select2bs4 form-control" id="Batch" name="Batch"required>
                      <option disabled selected>Select Batch</option>
                      <option value="1">Batch 1</option>
                      <option value="4">Batch 2</option>
                      <option value="2">On-Site</option>
                    </select>
                  </div>
                  <div class="col-3">
                    <button type="submit" class="btn btn-danger" id ="generateButton" >Generate ID</button>
                  </div>
                </div>
                
                </form>
                
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
          <div class="card card-primary">
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
                  <canvas id="TotalAgesBar" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
      <div class="col-md-6">
      <div class="card card-danger">
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
      <div class="row">
        <div class="col-md-6">
        <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Number of Churches</h3>

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
                  <canvas id="BarChurches" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>PINILI 2023</strong>
    TO GOD BE THE GLORY!
    <div class="float-right d-none d-sm-inline-block">
      <b>AYPRegV.</b> 0.0.1
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
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <script src="../../plugins/select2/js/select2.full.min.js"></script>
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
                  tbl_church.circuit_id WHERE tbl_circuit.Circuit = 'Gensan-Coastal Circuit';";
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

                  $GetTotalPreReg2 = "SELECT COUNT(*) AS PreReg2 FROM tbl_delegate WHERE tbl_delegate.RegType_id = 4;";
                  $PreReg2 = $con ->  query($GetTotalPreReg2);

                  if($PreReg2 -> num_rows > 0){
                    $PRG2 = $PreReg2 -> fetch_assoc();
                    $TotalPreg2 = $PRG2['PreReg2'];
                  }
  
  ?>
$(()=> {
  var Circuit = {
    labels: [
      'Malungon Circuit',
      'Gensan-Coastal Circuit',
      'Polomolok Circuit',
      'TuTam Circuit',
      'KorLuTan Circuit',
      'Banga Circuit',
      'Surallah Circuit',
      'NorSan Circuit'
    ],
    datasets: [
      {
        data: [<?php echo $OverMC ?>,<?php echo $OverGC ?>,<?php echo $OverPC ?>,<?php echo $OverTC ?>,<?php echo $OverKC ?>,<?php echo $OverBC ?>,<?php echo $OverSC ?>,<?php echo $OverNC ?>],
        backgroundColor: ['#e83e8c', '#ffc107','#dc3545', '#28a745', '#fd7e14', '#343a40', '#007bff', '#f4f6f9']
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

  //Registration

  var Registration_Type = {
    labels: [
      'Pre-Reg Batch 1',
      'Pre-Reg Batch 2',
      'On-Site',
    ],
    datasets: [
      {
        data: [<?php echo $TotalPreReg ?>, <?php echo $TotalPreg2 ?> ,<?php echo $TotalOnReg ?>],
        backgroundColor: ['#dc3545','#ffc107','#0d6efd' ]
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

//Ages

<?php

  $Get13And16 = "SELECT COUNT(*) AS OverThirSix
  FROM tbl_delegate 
  INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
  WHERE TIMESTAMPDIFF(YEAR, tbl_yp.Bday, CURDATE()) <= 16;";
  $ThirteenSixteen = $con -> query($Get13And16);

  if($ThirteenSixteen -> num_rows > 0){
      $ThirSix = $ThirteenSixteen -> fetch_assoc();
      $OverAllThirSix = $ThirSix['OverThirSix'];
  }

  $Get17And19 = "SELECT COUNT(*) AS OverSevNine
  FROM tbl_delegate 
  INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
  WHERE TIMESTAMPDIFF(YEAR, tbl_yp.Bday, CURDATE()) >= 17 AND TIMESTAMPDIFF(YEAR, tbl_yp.Bday, CURDATE()) <= 19;";
  $SeventeenNineteen = $con -> query($Get17And19);

  if($SeventeenNineteen -> num_rows > 0){
      $SevNine = $SeventeenNineteen -> fetch_assoc();
      $OverAllSevNine = $SevNine['OverSevNine'];
  }


  $Get20Up = "SELECT COUNT(*) AS OverTwentyUp
  FROM tbl_delegate 
  INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
  WHERE TIMESTAMPDIFF(YEAR, tbl_yp.Bday, CURDATE()) >= 20;";
  $TwentyUp = $con -> query($Get20Up);

  if($TwentyUp -> num_rows > 0){
      $TwUp = $TwentyUp -> fetch_assoc();
      $OverAllTwUp = $TwUp['OverTwentyUp'];
  }

?>

var Ages_Bracket = {
    labels: [
      '13-16',
      '17-19',
      '20 - above',
    ],
    datasets: [
      {
        data: [<?php echo $OverAllThirSix ?>, <?php echo $OverAllSevNine ?> ,<?php echo $OverAllTwUp ?>],
        backgroundColor: ['#dc3545','#ffc107','#0d6efd' ]
      }
    ]
  }

  var AgesReg = $('#TotalAgesBar').get(0).getContext('2d')
  var pieData = Ages_Bracket;
  var pieOptions = {
    maintanAspectRatio :false,
    responsive : true,
  }

  new Chart(AgesReg, {
    type: 'pie',
    data: pieData,
    options :pieOptions
  });
});

//Reg Per Day

<?php
  $GetDay1 = "SELECT COUNT(*) AS D1
  FROM tbl_delegate 
  WHERE DATE(tbl_delegate.RegTime) = '2023-26-12';
  ";
  $Day1 = $con -> query($GetDay1);

  if($Day1 -> num_rows > 0){
    $D1 = $Day1-> fetch_assoc();
    $OverD1 = $D1['D1'];
  }

  $GetDay2 = "SELECT COUNT(*) AS D2
  FROM tbl_delegate 
  WHERE DATE(tbl_delegate.RegTime) = '2023-27-12';
  ";
  $Day2 = $con -> query($GetDay2);

  if($Day2 -> num_rows > 0){
    $D2 = $Day2-> fetch_assoc();
    $OverD2 = $D2['D2'];
  }

  $GetDay3 = "SELECT COUNT(*) AS D3
  FROM tbl_delegate 
  WHERE DATE(tbl_delegate.RegTime) = '2023-28-12';
  ";
  $Day3 = $con -> query($GetDay3);

  if($Day3-> num_rows > 0){
    $D3 = $Day3-> fetch_assoc();
    $OverD3 = $D3['D3'];
  }

  $GetDay4 = "SELECT COUNT(*) AS D4
  FROM tbl_delegate 
  WHERE DATE(tbl_delegate.RegTime) = '2023-29-12';
  ";
  $Day4 = $con -> query($GetDay4);

  if($Day4 -> num_rows > 0){
    $D4 = $Day4-> fetch_assoc();
    $OverD4 = $D4['D4'];
  }

?>
var areaChartData = {
      labels  : ['Dec. 26', 'Dec. 27', 'Dec. 28', 'Dec. 29'],
      datasets: [
        {
          label               : 'Number of Delegates',
          backgroundColor     : '#007bff',
          borderColor         : '#007bff',
          pointRadius          : false,
          pointColor          : '#28a745',
          pointStrokeColor    : '#28a745',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $OverD1 ?>, <?php echo $OverD2 ?>, <?php echo $OverD3 ?>, <?php echo $OverD4 ?>]
        },
       
      ]
    }

var barChartCanvas = $('#RegPerDayBar').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
   
  
    barChartData.datasets[0] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'line',
      data: barChartData,
      options: barChartOptions
    })

    //Churches

    <?php 
    
        $GetChurchMalungon = "SELECT  COUNT(DISTINCT tbl_church.church) AS Malungon
        FROM tbl_delegate
        INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id
        INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id -- Corrected join condition
        INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id
        WHERE tbl_circuit.circuit_id = 5;"; 
        $ChurchMalungon = $con-> query($GetChurchMalungon);

        if($ChurchMalungon -> num_rows > 0){
          $CMC = $ChurchMalungon -> fetch_assoc();
          $OverChurchMC = $CMC['Malungon'];
        }

        $GetChurchGensan = "SELECT  COUNT(DISTINCT tbl_church.church) AS Gensan
        FROM tbl_delegate
        INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id
        INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id -- Corrected join condition
        INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id
        WHERE tbl_circuit.circuit_id = 2;"; 
        $ChurchGensan = $con-> query($GetChurchGensan);

        if($ChurchGensan -> num_rows > 0){
          $CGC = $ChurchGensan -> fetch_assoc();
          $OverChurchGC = $CGC['Gensan'];
        }

        $GetChurchPolomolok = "SELECT  COUNT(DISTINCT tbl_church.church) AS Polomolok
        FROM tbl_delegate
        INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id
        INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id -- Corrected join condition
        INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id
        WHERE tbl_circuit.circuit_id = 1;"; 
        $ChurchPolomolok = $con-> query($GetChurchPolomolok);

        if($ChurchPolomolok -> num_rows > 0){
          $CPC = $ChurchPolomolok -> fetch_assoc();
          $OverChurchPC = $CPC['Polomolok'];
        }

        $GetChurchTuTam = "SELECT  COUNT(DISTINCT tbl_church.church) AS TuTam
        FROM tbl_delegate
        INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id
        INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id -- Corrected join condition
        INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id
        WHERE tbl_circuit.circuit_id = 6;"; 
        $ChurchTuTam = $con-> query($GetChurchTuTam);

        if($ChurchTuTam -> num_rows > 0){
          $CTC = $ChurchTuTam -> fetch_assoc();
          $OverChurchTC = $CTC['TuTam'];
        }

        $GetChurchKorLuTan = "SELECT  COUNT(DISTINCT tbl_church.church) AS KorLuTan
        FROM tbl_delegate
        INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id
        INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id -- Corrected join condition
        INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id
        WHERE tbl_circuit.circuit_id = 4;"; 
        $ChurchKorLuTan = $con-> query($GetChurchKorLuTan);

        if($ChurchKorLuTan -> num_rows > 0){
          $CKC = $ChurchKorLuTan -> fetch_assoc();
          $OverChurchKC = $CKC['KorLuTan'];
        }

        $GetChurchBanga = "SELECT  COUNT(DISTINCT tbl_church.church) AS Banga
        FROM tbl_delegate
        INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id
        INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id -- Corrected join condition
        INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id
        WHERE tbl_circuit.circuit_id = 8;"; 
        $ChurchBanga = $con-> query($GetChurchBanga);

        if($ChurchBanga -> num_rows > 0){
          $CBC = $ChurchBanga -> fetch_assoc();
          $OverChurchBC = $CBC['Banga'];
        }

        $GetChurchSurallah = "SELECT  COUNT(DISTINCT tbl_church.church) AS Surallah
        FROM tbl_delegate
        INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id
        INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id -- Corrected join condition
        INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id
        WHERE tbl_circuit.circuit_id = 7;"; 
        $ChurchSurallah = $con-> query($GetChurchSurallah);

        if($ChurchSurallah -> num_rows > 0){
          $CSC = $ChurchSurallah -> fetch_assoc();
          $OverChurchSC = $CSC['Surallah'];
        }

        $GetChurchNorSan = "SELECT  COUNT(DISTINCT tbl_church.church) AS NorSan
        FROM tbl_delegate
        INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id
        INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id -- Corrected join condition
        INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id
        WHERE tbl_circuit.circuit_id = 3;"; 
        $ChurchNorSan = $con-> query($GetChurchNorSan);

        if($ChurchNorSan -> num_rows > 0){
          $CNC = $ChurchNorSan -> fetch_assoc();
          $OverChurchNC = $CNC['NorSan'];
        }
    
    ?>

    var Churches = {
      labels  : [ 'Malungon Circuit',
      'Gensan-Coastal Circuit',
      'Polomolok Circuit',
      'TuTam Circuit',
      'KorLuTan Circuit',
      'Banga Circuit',
      'Surallah Circuit',
      'NorSan Circuit'],
      datasets: [
        {
          label               : 'Number of Churches ',
          backgroundColor     : '#007bff',
          borderColor         : '#007bff',
          pointRadius          : false,
          pointColor          : '#28a745',
          pointStrokeColor    : '#28a745',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $OverChurchMC ?>, <?php echo $OverChurchGC ?>, <?php echo $OverChurchPC ?>, 
          <?php echo $OverChurchTC ?>, <?php echo $OverChurchKC ?>, <?php echo $OverChurchBC ?>, <?php echo $OverChurchSC ?>, <?php echo $OverChurchNC ?>]
        },
       
      ]
    }

var barChartCanvas = $('#BarChurches').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, Churches)
    var temp0 = Churches.datasets[0]
   
  
    barChartData.datasets[0] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

</script>

<script>
  $(()=>{

    $('.select2').select2()

    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>
<script>
  $(document).ready(()=>{
    function checkSelection(){
      var circuitSelected = $('#Circuit').val();
      var churchSelected = $('#Church').val();
      var Batch = $('#Batch').val();

      if(circuitSelected && churchSelected && Batch) {
        $('#generateButton').prop('disabled', false);
      }else{
        $('#generateButton').prop('disabled', true);
      }
    }

    $('#Circuit, #Church, #Batch').change(()=> {
      checkSelection();
    })

    checkSelection();
  })
</script>
<script>
  $(document).ready(()=>{
    let Circuit = $('#Circuit');
    let Church = $('#Church')
    Circuit.on('change', ()=> {
      let GetCircuit =Circuit.val();
      $.ajax({
        url: '../../controller/GetChurch.php',
        method: 'POST',
        data: {Circuit: GetCircuit},
        success: (response) => {
          Church.html(response);
        },
        error: (xhr, status, error) => {
          console.error("AJAX request failed:", status, error);
        }
      })
    })
  })
</script>


</body>
</html>
