<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About us</title>
  <link rel="icon" type="image/x-icon" href="../../dist/img/aypLogo.jpg">

    <?php require ('../../dbcon.php') ?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

     <!-- DataTables -->
     <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
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
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="leaderboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Leaderboard
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
            <a href="ScoreBoard.php" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Score Sheets
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
            <h1 class="m-0">About us</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About us</li>
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
                
                  <table id="leaderboard" class="table">
                    <thead class="d-none">
                        <tr>
                        <th>Circuit</th>
                        <th>OverAll Score</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $getScore = "SELECT tbl_circuit.Circuit, SUM(tbl_scrore.score) AS total_score, tbl_circuit.colour FROM tbl_scrore INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_scrore.circuit_id GROUP BY tbl_circuit.Circuit ORDER BY total_score DESC;";
                    $score = $con -> query($getScore);

                    if($score){
                        foreach($score as $row){
                    ?>
                    <tr >
                         <td><?php echo $row['Circuit']; ?></td>
                        <td><?php echo $row['total_score']; }} ?></td>
                    </tr>
                    </tbody>
                  </table>
                  <style>
                    tr{
                        font-size: 1rem;
                    }
                    table tr:first-child{
                        background-color: #007bff;
                        font-size: xx-large;
                        border-radius: 50%;
                        color: white;
                        font-family: 'Anton';
                    }
                    table tr:first-child td:first-child{
                        border-top-left-radius: 15px;
                        
                    }
                    table tr:first-child td:nth-child(2){
                        border-top-right-radius: 15px;
                      
                    }

                    table tr:nth-child(2){
                        background-color: #c4e1ff;
                        font-size: large;
                        font-family: 'Anton';
                    }
                    table tr:nth-child(3){
                        background-color:#e8f3ff;
                        font-size: medium;
                        font-family: 'Anton';
                    }
                    table tr:nth-child(3) td:first-child{
                       
                        border-bottom-left-radius: 8px;
                    }
                    table tr:nth-child(3) td:nth-child(2){
                       
                        border-bottom-right-radius: 8px;
                    }
                  
                  </style>
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

<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>

<script>
      $(document).ready(() => {
        // Initialize DataTable
        var table = $('#leaderboard').DataTable({
          "searching": false,
          "responsive": true,
          "lengthChange": true,
          "autoWidth": true,
          "paging": false;
          "order": [[1, 'desc']],
          "buttons": ["csv", "excel", "pdf", "print", "colvis"],
        });

        // Move buttons container
        table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
    </script>

</body>
</html>
