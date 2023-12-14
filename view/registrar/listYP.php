<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Young People Profile</title>
  <link rel="icon" type="image/x-icon" href="../../dist/img/aypLogo.jpg">

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
            <a href="listYP.php" class="nav-link active">
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
            <h1 class="m-0">Young People Profile</h1>
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
              <form method="POST" action="">
                    <div class="row mb-2">
                        <div class="col-sm-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="filterDropdown">Filter by:</label>
                                </div>
                                <select class="form-control select" id="filterDropdown">
                                    <option value="0, 6, 7, 3, 5"> </option>
                                    <option value="0">Name</option>
                                    <option value="6">Church</option>
                                    <option value="7">Circuit</option>
                                    <option value="3">Age</option>
                                    <option value="5">Del. Type</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-9 text-right">
                            <div class="input-group">
                                <input type="text" class="form-control" id="searchInput" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                </form>
                <table id="example1"class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>NickName</th>
                      <th>Contact #</th>
                      <th>Age</th>
                      <th class="d-none">Bday</th>
                      <th>Del. Type</th>
                      <th>Church</th>
                      <th>Circuit</th>
                      <th>Action</th>
                      <th class="d-none">YP ID</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $getInfo = "SELECT CONCAT(tbl_yp.fname,' ',tbl_yp.lname) AS Name, tbl_yp.nickname, tbl_yp.contact_num,  TIMESTAMPDIFF(YEAR, tbl_yp.Bday, CURDATE()) AS Age, tbl_yp.Bday ,tbl_delegatetype.delegate_type, tbl_church.Church, tbl_circuit.Circuit, tbl_yp.yp_id FROM tbl_yp INNER JOIN tbl_delegatetype ON tbl_delegatetype.del_type_id = tbl_yp.del_type_id INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id;";

                      $Info = $con -> query($getInfo);

                      if($Info){
                        foreach($Info as $row){
                    ?>
                    <tr>
                      <td><?php echo $row['Name'] ?></td>
                      <td><?php echo $row['nickname'] ?></td>
                      <td><?php echo $row['contact_num'] ?></td>
                      <td><?php echo $row['Age'] ?></td>
                      <td class="d-none"><?php echo $row['Bday'] ?></td>
                      <td><?php echo $row['delegate_type'] ?></td>
                      <td><?php echo $row['Church'] ?></td>
                      <td><span class="badge"><?php echo $row['Circuit'] ?></span></span></td>
                      <td><EDIT type="button" class="btn btn-primary editBtn" >EDIT</button></td>
                      <td class="d-none"><?php echo $row['yp_id'] ?></td>
                    </tr>
                    <?php }} ?>
                  </tbody>
                </table>
              
              </div>
            </div>
            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-dialog-centered"role="document">
                    <input type = "hidden" name="update_id" id="update_id">
                    <div class="modal-content" >
                        <div class="modal-header d-flex justify-content-center"style="border-bottom: 1px solid green">
                            <h4 id="namez"></h4>
                        </div>
                        <form id="updateInfo">
                        <div class="modal-body">
                          <div class="row">
                              <div class="col-6">
                                <label for="firstName">Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName">
                              </div>
                              <div class="col-6">
                                <label for="surname" style="color: white">Name</label>
                                <input type="text" class="form-control" id="surname" name= "surname">
                              </div>
                          </div>
                          <label for="NiName">Edit NickName</label>
                            <input type="text" class="form-control" id="NiName" name="NiName">
                          <div class="row mt-2">
                            <div class="col-12">
                              <label for ="contactNum">Contact Number</label>
                              <input type="number" id="contactNum" class="form-control" name="contactNum">
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-12">
                              <label for="Bday">Birthday</label>
                              <input type="date" id="Bday" class="form-control" name="Bday">
                            </div>
                          </div>
                          <input type="text" name="yp_id" id="yp_id" class="d-none"> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                            </form>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
<!-- AdminLTE for demo purposes -->
<script>
      $(document).ready(() => {
        // Initialize DataTable
        var table = $('#example1').DataTable({
          "searching": true,
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "buttons": ["csv", "excel", "pdf", "print", "colvis"],
          "drawCallback": function (settings) {
            $('#example1 tbody tr').each(function () {
              var badge = $(this).find('.badge');
              var tdVal = $(this).find('td:eq(7)').text();

              switch (tdVal) {
                case 'Polomolok Circuit':
                  badge.addClass('bg-danger');
                  break;

                case 'TuTam Circuit':
                  badge.addClass('bg-success');
                  break;

                case 'Gensan-Coastal Circuit':
                  badge.addClass('bg-warning');
                  break;

                case 'Malungon Circuit':
                  badge.addClass('bg-pink');
                  break;

                case 'KorLuTan Circuit':
                  badge.addClass('bg-orange');
                  break;

                case 'NorSan Circuit':
                  badge.addClass('bg-light');
                  break;

                case 'Banga Circuit':
                  badge.addClass('bg-dark');
                  break;

                case 'Surallah Circuit':
                  badge.addClass('bg-primary');
                  break;
              }
            });

            
          }
        });
// Handle filter dropdown change
$('#filterDropdown').on('change', function() {
              var filterValue = $(this).val();
              var searchValue = $('#searchInput').val();
              table.columns([0, 1, 2,3]).search(searchValue, false, false).draw(); // Search in columns 0, 1, and 2 together
            });

            // Handle search input change for individual column search
            $('#searchInput').on('keyup', function() {
              var filterValue = $('#filterDropdown').val();
              var searchValue = $(this).val();
              if (filterValue === "0,1,2,3") {
                // If searching in all columns together
                table.search(searchValue).draw();
              } else {
                // If searching in individual column
                table.column(filterValue).search(searchValue).draw();
              }
            });
        // Move buttons container
        table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
    </script>
<style>
                    /* Add this CSS to hide the default DataTables search input */
                    div.dataTables_wrapper div.dataTables_filter {
                        display: none;
                    }
                    
                </style>
<script>
    $(document).ready(function() {
        $('#example1').on('click', '.editBtn',function() {
            $('#updateModal').modal('show');
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            var name = data[0];
            
            var nameArray = name.split(' ');
            var firstName = nameArray.slice(0, -1).join(' ');
            var surname = nameArray.slice(-1).join(' ');
   
            $('#NiName').val(data[1]);
            $('#namez').text(data[0]);

            $('#firstName').val(firstName);
            $('#surname').val(surname);
            $('#contactNum').val(data[2]);
            $('#Bday').val(data[4]);
            $('#yp_id').val(data[9]);

        });
    });
</script>


<style>
  .bg-orange{
    background-color: orange;
  }
  .bg-pink{
    background-color: pink;
  }
</style>
<script>
  $(()=>{

    $('.select2').select2()

    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>
<script>
  let updateYPInfo = $('#updateInfo');

  updateYPInfo.on('submit', (event)=>{
    event.preventDefault();

      $.ajax({
      url: '../../controller/updateNickName.php',
      method: 'POST',
      data: updateYPInfo.serialize(),
      success: (response) => {
        console.log(response);
        if(response === 'success'){
          Swal.fire({
            icon: 'success',
            title: 'Updated!',
            text: 'Yp Updated Successfully!'
          }).then(() => {
            location.reload();
          })
        }else{
          Swal.fire({
            icon: 'error',
            title: 'ERROR!',
            text: 'There is something went wrong. '
          })
        }
     
      }
    })
  })

  

</script>
</body>
</html>
