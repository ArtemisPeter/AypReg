<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registered Delegates</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <?php require ('../../dbcon.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                Church Profile
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="registrar_dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Register
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-upload"></i>
              <p>Import<i class="fas fa-angle-left right"></i></p></a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="registrar_import_prereg.php" class="nav-link active">
                    <i class="fas fa-registered"></i>
                    <p>Pre-Reg</p>
                  </a>
                </li>
                                    
                <li class="nav-item">
                  <a href="admin_importPeriodical.php" class="nav-link">
                    <i class="far fa-registered"></i>
                    <p>Young People</p>
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
            <h1 class="m-0">Pre Reg Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Young People Profile</li>
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
                <form id="importPreReg" enctype="multipart/form-data" method="post">
                <a href="../../PreReg Template.csv" download>Click me to download the CSV file for importing Pre Reg</a>
                    <div class="row d-flex justify-content-center mt-4 mb-4">
                        <div class="col-4">
                            <input type="file" class="form-control-file form-control-lg" name ="PreRegCSV" id ="PreRegCSV" required accept=".csv" >

                        </div>
                        <div class="col-2">
                            <button class="btn btn-danger" type="submit" id="import" name="import"><i class="fas fa-file-upload"></i></button>
                        </div>
                    </div>

                </form>
                <div id="remind"></div>
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
    document.getElementById('importPreReg').addEventListener('submit', (e) => {
        const fileInput = document.getElementById('PreRegCSV');
        const reminder = document.getElementById('remind');

        if (fileInput.files.length === 0) {
            showAlert('Select a file', 'danger');
            e.preventDefault();
        } else {
            const fileName = fileInput.files[0].name;
            if (!fileName.toLowerCase().endsWith('.csv')) {
                showAlert('Please choose a CSV file.', 'danger');
                e.preventDefault();
            }
        }
    });

    function showAlert(message, type) {
        const reminder = document.getElementById('remind');
        const alert = document.createElement('div');
        alert.classList.add('alert', `alert-${type}`);
        alert.textContent = message;
        reminder.innerHTML = '';
        reminder.appendChild(alert);
    }
</script>
<?php 
require '../../dbcon.php';

                    if(isset($_POST['import'])){
                        $handle = fopen($_FILES['PreRegCSV']['tmp_name'], "r");
                        $count = 0;
                        $error = false;

                        while(($row = fgetcsv($handle, 1000, ",")) !==FALSE){
                            if($count == 0){
                                $count++;
                                continue;
                            }
                            $ImportName = $row[0];
                            $nname = $row[1];
                            $bday = $row[3];
                            $contact = $row[2];
                            $circuit = $row[5];
                            $Church = $row[4];
                            $deltype = 'Young People';

                            $YouthNames = explode(', ', $ImportName);

                            try{

                                foreach($YouthNames as $FullName){
                                    $FullName = trim($FullName);
                                    $NameParts = explode(' ', $FullName);
    
                                    $fname = '';
                                    $lname = '';
    
                                    if (count($NameParts) > 1) {
                                        // If there are multiple parts, build the first name
                                        $fname = implode(' ', array_slice($NameParts, 0, -1));
                                        $lname = end($NameParts);
                                    } else {
                                        // If only one part, consider it as the first name
                                        $fname = $NameParts[0];
                                    }

                                    //Check if the Church is existing in the db.
                                    $getChurch = "SELECT COUNT(*) ChurchCount FROM tbl_church WHERE tbl_church.Church = '$Church';";
                                    $ChurchCount = $con -> query($getChurch);

                                    if($ChurchCount -> num_rows > 0){
                                        $ChurchC = $ChurchCount -> fetch_assoc();
                                        $ExistChurch = $ChurchC['ChurchCount'];
                                    }

                                    if($ExistChurch == 0){
                                        $insert = "INSERT INTO `tbl_church`( `Church`, `circuit_id`) VALUES ('$Church', 
                                        (SELECT tbl_circuit.circuit_id FROM tbl_circuit WHERE tbl_circuit.Circuit = '$circuit'))";
                                        $insertChurch = $con-> query($insert);
                                    }
    
                                    //Check if the yp is already registered
                                    $CheckRegistered = "SELECT COUNT(tbl_delegate.delegate_id) AS registered FROM tbl_delegate 
                                    INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id WHERE tbl_delegate.yp_id = 
                                    (SELECT tbl_yp.yp_id FROM tbl_yp WHERE tbl_yp.fname = '$fname' AND tbl_yp.lname = '$lname');";
                                    $resultReg = $con-> query($CheckRegistered);
    
                                    //Check if the yp is registered in the database;
                                    $CheckExistYP = "SELECT COUNT(tbl_yp.yp_id) AS CheckExist FROM tbl_yp WHERE tbl_yp.fname = '$fname' AND tbl_yp.lname ='$lname';";
                                    $resultYP = $con-> query($CheckExistYP);
    
                                    if($resultReg -> num_rows > 0){
                                        $checkRes = $resultReg->fetch_assoc();
                                        $ExistReg = $checkRes['registered'];
                                    }
    
                                    if($resultYP -> num_rows > 0){
                                        $check = $resultYP-> fetch_assoc();
                                        $Exist = $check['CheckExist'];
                                    }
    
                                    //Check if registered in the system and registered to the duyog
                                    if($Exist == 0){
                                        //register if not...
                                        $InsertYP = "INSERT INTO tbl_yp (tbl_yp.fname, tbl_yp.lname, tbl_yp.nickname, tbl_yp.Bday, 
                                        tbl_yp.del_type_id, tbl_yp.contact_num, tbl_yp.church_id) VALUES ('$fname', '$lname', '$nname', STR_TO_DATE('$bday', '%m/%d/%Y'), (SELECT tbl_delegatetype.del_type_id FROM tbl_delegatetype WHERE tbl_delegatetype.delegate_type = '$deltype'), 
                                        '$contact', (SELECT tbl_church.church_id FROM tbl_church WHERE tbl_church.Church = '$Church'))";
                                        $YP = $con -> query($InsertYP);
                                    }
                                    
                                    //Check if the yp is registered in the system
                                    if($ExistReg == 0){
    
                                        //register it!
                                        $register = "INSERT INTO tbl_delegate (tbl_delegate.yp_id, tbl_delegate.RegTime, tbl_delegate.RegType_id)
                                        VALUES ((SELECT tbl_yp.yp_id FROM tbl_yp WHERE tbl_yp.fname = '$fname' AND tbl_yp.lname = '$lname'), NOW(), 1);";
                                        $registered = $con -> query($register);
                                        
                                    }
                                }

                            }catch(Exception $e){
                                echo "<script>alert($e)</script>";
                                $error = true;
                                
                            }
                            $count++;
                        }   
                        fclose($handle);

                        if($error){
                            echo "<script>Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Other books are already in the system, other books will be saved!',
                            })</script>"; 
                        }else{
                            echo "<script>Swal.fire({
                                icon: 'success',
                                title: 'Successfully Imported',
                                showConfirmButton: false,
                                timer: 1500
                            })</script>";
                        }
                    }
                
                ?>
</body>
</html>
