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
            <a href="#" class="nav-link active">
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
                
                  <div class="row">
                  <div class="col-12 ">
            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-sport-tab" data-toggle="pill" href="#custom-tabs-four-sport" role="tab" aria-controls="custom-tabs-four-sport" aria-selected="true">Sports</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-socio-tab" data-toggle="pill" href="#custom-tabs-four-socio" role="tab" aria-controls="custom-tabs-four-socio" aria-selected="false">Socio Cultural, Literature & Bible Games</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-sport" role="tabpanel" aria-labelledby="custom-tabs-four-sport-tab">
                  <div class="row">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-bball-tab" data-toggle="pill" href="#vert-tabs-bball" role="tab" aria-controls="vert-tabs-bball" aria-selected="true">Basketball</a>
                  <a class="nav-link" id="vert-tabs-vballM-tab" data-toggle="pill" href="#vert-tabs-vballM" role="tab" aria-controls="vert-tabs-vballM" aria-selected="false">Volleyball (Male)</a>
                  <a class="nav-link" id="vert-tabs-vballF-tab" data-toggle="pill" href="#vert-tabs-vballF" role="tab" aria-controls="vert-tabs-vballF" aria-selected="false">Volleyball (Female)</a>
                  <a class="nav-link" id="vert-tabs-BdmtnSM-tab" data-toggle="pill" href="#vert-tabs-BdmtnSM" role="tab" aria-controls="vert-tabs-BdmtnSM" aria-selected="false">Badminton Single (Male)</a>
                  <a class="nav-link" id="vert-tabs-BdmtnSF-tab" data-toggle="pill" href="#vert-tabs-BdmtnSF" role="tab" aria-controls="vert-tabs-BdmtnSF" aria-selected="false">Badminton Single (Female)</a>
                  <a class="nav-link" id="vert-tabs-BdmtnMD-tab" data-toggle="pill" href="#vert-tabs-BdmtnMD" role="tab" aria-controls="vert-tabs-BdmtnMD" aria-selected="false">Badminton Mixed-Doubles</a>
                  <a class="nav-link" id="vert-tabs-TblTnsSM-tab" data-toggle="pill" href="#vert-tabs-TblTnsSM" role="tab" aria-controls="vert-tabs-TblTnsSM" aria-selected="false">Table Tennis Single (Male)</a>
                  <a class="nav-link" id="vert-tabs-TblTnsSF-tab" data-toggle="pill" href="#vert-tabs-TblTnsSF" role="tab" aria-controls="vert-tabs-TblTnsSF" aria-selected="false">Table Tennis Single (Male)</a>
                  <a class="nav-link" id="vert-tabs-TblTnsMD-tab" data-toggle="pill" href="#vert-tabs-TblTnsMD" role="tab" aria-controls="vert-tabs-TblTnsMD" aria-selected="false">Table Tennis Mixed-Doubles</a>
                  <a class="nav-link" id="vert-tabs-ChessM-tab" data-toggle="pill" href="#vert-tabs-ChessM" role="tab" aria-controls="vert-tabs-ChessM" aria-selected="false">Chess (Male)</a>
                  <a class="nav-link" id="vert-tabs-ChessF-tab" data-toggle="pill" href="#vert-tabs-ChessF" role="tab" aria-controls="vert-tabs-ChessF" aria-selected="false">Chess (Female)</a>
                  <a class="nav-link" id="vert-tabs-Darts-tab" data-toggle="pill" href="#vert-tabs-Darts" role="tab" aria-controls="vert-tabs-Darts" aria-selected="false">Darts</a>
                  <a class="nav-link" id="vert-tabs-WF-tab" data-toggle="pill" href="#vert-tabs-WF" role="tab" aria-controls="vert-tabs-WF" aria-selected="false">Word Factory</a>
                  <a class="nav-link" id="vert-tabs-Scrabble-tab" data-toggle="pill" href="#vert-tabs-Scrabble" role="tab" aria-controls="vert-tabs-Scrabble" aria-selected="false">Scrabble</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-bball" role="tabpanel" aria-labelledby="vert-tabs-bball-tab">
                     <form id="BBallForm" name="1">
                        <div class="row">
                          <div class="col-2">
                            <label class="mt-1">Malungon Circuit</label>
                          </div>
                          <div class="col-8">
                            <input class="form-control" id="MalC" name="MalC" type="number" placeholder="Input Score">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-2">
                            <label>Gensan-Coastal Circuit</label>
                          </div>
                          <div class="col-8">
                            <input class="form-control" id="GenCosC" name="GenCosC" type="number" placeholder="Input Score">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-2">
                            <label>Polomolok Circuit</label>
                          </div>
                          <div class="col-8">
                            <input class="form-control" id="PolC" name="PolC" type="number" placeholder="Input Score">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-2">
                            <label>TuTam Circuit</label>
                          </div>
                          <div class="col-8">
                            <input class="form-control" id="TutC" name="TutC" type="number" placeholder="Input Score">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-2">
                            <label>KorLuTan Circuit</label>
                          </div>
                          <div class="col-8">
                            <input class="form-control" id="KorC" name="KorC" type="number" placeholder="Input Score">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-2">
                            <label>Banga Circuit</label>
                          </div>
                          <div class="col-8">
                            <input class="form-control" id="BanC" name="BanC" type="number" placeholder="Input Score">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-2">
                            <label>Surallah Circuit</label>
                          </div>
                          <div class="col-8">
                            <input class="form-control" id="SurC" name="SurC" type="number" placeholder="Input Score">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-2">
                            <label>NorSan Circuit</label>
                          </div>
                          <div class="col-8">
                            <input class="form-control" id="NorC" name="NorC" type="number" placeholder="Input Score">
                          </div>
                        </div>
                        <div class="d-grid mt-4 col-10">
                          <button type="submit" class="btn btn-success btn-block" id="bballBtn">Save</button>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-vballM" role="tabpanel" aria-labelledby="vert-tabs-vballM-tab">
                     Vball M
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-vballF" role="tabpanel" aria-labelledby="vert-tabs-vballF-tab">
                    Vball F
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-BdmtnSM" role="tabpanel" aria-labelledby="vert-tabs-BdmtnSM-tab">
                    Badminton SM
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-BdmtnSF" role="tabpanel" aria-labelledby="vert-tabs-BdmtnSF-tab">
                    Badminton SF
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-BdmtnMD" role="tabpanel" aria-labelledby="vert-tabs-BdmtnMD-tab">
                    Badminton MD
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-TblTnsSM" role="tabpanel" aria-labelledby="vert-tabs-TblTnsSM-tab">
                    Table Tennis SM
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-TblTnsSF" role="tabpanel" aria-labelledby="vert-tabs-TblTnsSF-tab">
                    Table Tennis SF
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-TblTnsMD" role="tabpanel" aria-labelledby="vert-tabs-TblTnsMD-tab">
                    Table Tennis MD
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-ChessM" role="tabpanel" aria-labelledby="vert-tabs-ChessM-tab">
                    Chess M
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-ChessF" role="tabpanel" aria-labelledby="vert-tabs-ChessF-tab">
                    Chess F
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-Darts" role="tabpanel" aria-labelledby="vert-tabs-Darts-tab">
                   Darts
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-WF" role="tabpanel" aria-labelledby="vert-tabs-WF-tab">
                    Word Factory
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-Scrabble" role="tabpanel" aria-labelledby="vert-tabs-Scrabble-tab">
                    Scrabble
                  </div>
                </div>
              </div>
            </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-socio" role="tabpanel" aria-labelledby="custom-tabs-four-socio-tab">
                   Other
                  </div>
                 
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
                  </div>
            
                  
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
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="../../dist/js/adminlte.js"></script>

<script>
  $(document).ready(()=> {
    
    let BBallForm = $('#BBallForm');

    let formId;

    BBallForm.on('submit', (event)=>{
      event.preventDefault();

      let formData = BBallForm.serializeArray();
      formData.push({ name: 'formId', value: formId });

      $.ajax({
        data: formData,
        url: '../../controller/SportScore/BBall.php',
        method: 'POST',
        success: (response)=> {
          console.log(response);
        }
      })
    })
  })
</script>


</body>
</html>
