<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Youth</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

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
          
               <li class="nav-item ">
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
          <li class="nav-item">
            <a href="registrar_dashboard.php" class="nav-link active">
            <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Register
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
            <h1 class="m-0">Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration</li>
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
                      <div class="col-12">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Register Form 1</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Register Form 2</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                <form id="formReg1">
                                <div class="container">
                                <div class="row justify-content-center">
                                      <div class="col-6">
                                        <div class="form-group">
                                          <select class="select2bs4 " multiple="multiple"  data-placeholder="Search for Young People" style="width: 100%;" id="YPselect" name="YPselect" required>
                                            <?php 
                                              $getYP = "SELECT CONCAT(tbl_yp.fname,' ',tbl_yp.lname) AS YpName, tbl_church.Church FROM tbl_yp INNER JOIN tbl_church On tbl_yp.church_id = tbl_church.church_id;";
                                              $YP = $con -> query($getYP);

                                              if($YP -> num_rows>0){
                                                $options=mysqli_fetch_all($YP, MYSQLI_ASSOC);
                                              }
                                              foreach($options as $option){
                                            ?>
                                            <option><?php echo $option['YpName']; }?></option>
                                          </select>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row  justify-content-center mt-3">
                                    <div class="col-6">
                                      <button type="submit" class="btn btn-block btn-primary">Register</button>
                                    </div>
                                  </div>
                                </div>
                                <input type="text" id="selectedYP"name="selectedYP" class="d-none">
                              </div>
                                </form>
                                
                              <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                <form id="formReg2">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm-4">
                                      <label for="firstName">Name</label>
                                      <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="col-sm-4">
                                    <label for="lastName" style="visibility:hidden">surname</label>
                                      <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Surname" required>
                                    </div>
                                    <div class="col-sm-4">
                                      <label for="nickname" style="visibility:hidden">Nickname</label>
                                      <input type="text" name="nickname"id="nickname"class="form-control" placeholder="NickName" required>
                                    </div>
                                  </div>
                                  <div class="row mt-3">
                                    <div class="col-sm-6">
                                      <label for="age">Other Information</label>
                                      <input type = "date" name="bday" id="bday"placeholder="Birthdate" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                      <label for="Contact" style="visibility:hidden" >Contact Number</label>
                                      <input type = "number" name="Contact" id="Contact"placeholder="Contact Number" class="form-control">
                                    </div>
                                      
                                  </div>
                                  <div class="row mt-3">
                                        <div class="col-sm-5">
                                          <label for="Circuit">Circuit and Church</label>
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
                                        <div class="col-sm-5">
                                          <label for="Church" class="form-label" style="visibility:hidden">Church</label>
                                          <select class="select2bs4 form-control" id="Church" name="Church" required>
                                            <option disabled selected>Select Church</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-2">
                                          <label for="Church" class="form-label" style="color: white">Add......................</label>
                                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#AddChurch"><i class="fas fa-plus" style="color: #ffffff;"></i></button>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                      <div class="row mt-3">
                                       
                                          <div class="col-2">
                                            <div class="custom-control custom-radio">
                                              <input class="custom-control-input custom-control-input-danger" type="radio" id="YP" name="customRadio" value= 'Young People'>
                                              <label for="YP" class="custom-control-label">Young People</label>
                                            </div>
                                          </div>
                                          <div class="col-2">
                                            <div class="custom-control custom-radio">
                                              <input class="custom-control-input custom-control-input-success" type="radio" id="YW" name="customRadio" value= 'Youth Worker'>
                                              <label for="YW" class="custom-control-label" >Youth Worker</label>
                                            </div>
                                          </div>
                                          <div class="col-2">
                                            <div class="custom-control custom-radio">
                                              <input class="custom-control-input custom-control-input-success" type="radio" id="V" name="customRadio" value= 'Visitor'>
                                              <label for="V" class="custom-control-label" >Visitor</label>
                                            </div>
                                          </div>
                                        
                                      </div>
                                          
                                      </div>
                                      <button type="submit" class="btn btn-primary btn-block mt-5">Register</button>
                                              </div>
                                </form>
                                
                                            </div>
                                            
                                          </div>
                                        </div>
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

  <div class="modal fade" id ="AddChurch" data-backdrop="static" data-keyboard="false" tabindex="-1"aria-labelledby="AddChurch" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="AddChurch">Add Church</h5>
        </div>
        <div class="modal-body">
          <form id="AddChurchForm">
          <select class="select2bs4 form-control" name="Circuit2" id="Circuit2" required>
            <option disabled selected>Select Circuit</option>
            <?php 
            $getCircuit = "SELECT tbl_circuit.Circuit FROM tbl_circuit";
            $Circuit = $con -> query($getCircuit);
            if($Circuit){
              foreach($Circuit AS $row){
                ?>
                <option><?php echo $row['Circuit']; }}?></option>
              </select>    
                <label for="NewChurch" class="form-label" style="visibility:hidden">Church</label>
                <input type="text" class="form-control"placeholder="Church" id="NewChurch"name="NewChurch">

                <div id="churchWarning" style="color: red;"></div>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  
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
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  var toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 4000
});

$(document).ready(() => {
    let NewChurchModal = $('#AddChurchForm');
    let TextWarning = $('#churchWarning');
    let Church = $('#NewChurch');

    Church.on('input', () => {
        let churchVal = Church.val();
        let regex = /^[a-zA-Z0-9\s]+$/;

        if (!regex.test(churchVal)) {
            TextWarning.text('Special Characters are not allowed').show();
            Church.css('border-color', 'red');
        } else {
            TextWarning.hide();
            Church.css('border-color', '');
        }
    });

    NewChurchModal.submit((event) => {
        event.preventDefault();

        // Check again before submitting the form
        let churchVal = Church.val();
        let regex = /^[a-zA-Z0-9\s]+$/;

        if (!regex.test(churchVal)) {
            TextWarning.text('Special Characters are not allowed').show();
            Church.css('border-color', 'red');
        } else {
            TextWarning.hide();
            Church.css('border-color', '');

            $.ajax({
                url: '../../controller/AddChurch.php',
                method: 'POST',
                data: NewChurchModal.serialize(),
                success: (response) => {
                    console.log(response);
                    if (response === 'success') {
                        toast.fire({
                            icon: 'success',
                            title: 'Church Added Successfully'
                        });
                    } else if (response === 'Exist') {
                        toast.fire({
                            icon: 'warning',
                            title: 'Church already exists!'
                        });
                    } else {
                        toast.fire({
                            icon: 'error',
                            title: 'There is an error'
                        });
                    }
                }
            });
        }
    });
});

</script>
<script>
$(document).ready(()=> {
  // Get the multiselect dropdown
  var multiselect = $("#YPselect");

  multiselect.on("change", ()=> {
   
    var selectedYP = multiselect.val();
    var joinedYP = selectedYP.join(", ");

    $("#selectedYP").val(joinedYP);
  });
});
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
<script>
  $(document).ready(()=>{
    let regForm = $('#formReg2');

    regForm.on('submit', (event)=>{
      event.preventDefault();

      $.ajax({
        url: '../../controller/addYouth.php',
        method: 'POST',
        data: regForm.serialize(),
        success: (response)=>{
          console.log(response);
            if(response === 'success'){
              Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Youth Registered!'
              }).then(()=> {
                location.reload();
              })
            }else if(response === 'Exist'){
              Swal.fire({
                icon: 'warning',
                title: 'Hold on!',
                text: 'Already Registered!'
              })
            }
            else{
              Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Forgive me my darling!'
              })
            }
        }
      })
    })
  })
</script>
<script>
  $(document).ready(() => {
  let formReg1 = $('#formReg1');

  formReg1.on('submit', (event) => {
    event.preventDefault();

    let selectedYp = $('#selectedYP');

    $.ajax({
      url: '../../controller/AddYouth1.php',
      method: 'POST',
      data: { YouthSelected: selectedYp.val() },
      success: (response) => {
        console.log(response);

        if (response === 'error') {
          Swal.fire({
            icon: 'error',
            title: 'There is something wrong.',
            text: 'Sorry, please contact the Developer'
          });
        } else if (response === 'Exist') {
          Swal.fire({
            icon: 'warning',
            title: 'YP already Registered',
          });
        } else if (response === 'success'){
          Swal.fire({
            icon: 'success',
            title: 'Successfully Registered!',
          }).then(() => {
            location.reload();
          });
        }else {
          Swal.fire({
            icon: 'error',
            title: 'There is something wrong',
            text: 'Might be the selected YP are already Registered but other unregistered will be saved'
          })
        }
      },
    });
  });
});

</script>
</body>
</html>
