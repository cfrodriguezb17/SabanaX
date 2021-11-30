<?php
  require_once("../../model/conexion.php");
  require_once("../../model/consultasAdmin.php");
  require_once("../../model/seguridadAdmin.php");
  require_once("../../controller/listarUsersAdmin.php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
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
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    include("../includes/sidebarMenuAdmin.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>GESTIÓN DE USUARIOS - REGISTRAR</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../homeAdmin.php">Home</a></li>
              <li class="breadcrumb-item active">Registrar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Completa los campos para registrar un nuevo usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <div class="row">
                  <form class="w-100 size-form" action="../../controller/insertUserAdmin.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Identificación</label>
                        <input type="number" name="identificacion" class="form-control" id="exampleInputEmail1" placeholder="Ej: 1077092435">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">TIPO DE DOCUMENTO</label>
                        <select name="tipodoc" class="form-control"required id="exampleFormControlSelect1">
                          <option value="">Seleccione aqui</option>
                          <option value="C.C">C.C</option>
                          <option value="T.I">T.I</option>
                          <option value="C.E">C.E</option>
                          <option value="PASAPORTE">PASAPORTE</option>
                        </select>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">NOMBRES</label>
                        <input type="text" name="nombres" required class="form-control" placeholder="Ej: DUVAN FELIPE">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">APELLIDOS</label>
                        <input type="text" name="apellidos" required class="form-control" placeholder="Ej: AVILA MARTINEZ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">EMAIL</label>
                        <input type="email" name="email" class="form-control" required id="exampleInputEmail1" placeholder="Ej: usuario@gmail.com">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">TELÉFONO</label>
                        <input type="number" name="telefono" required class="form-control" placeholder="Ej: 3045384271">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">CLAVE</label>
                        <input type="texto" name="clave" required class="form-control" placeholder="Ej: 12345">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">ROL</label>
                        <select name="rol" class="form-control"required id="exampleFormControlSelect1">
                          <option value="">Seleccione aqui</option>
                          <option value="Admin">Administrador</option>
                          <option value="Artista">Artista</option>
                          <option value="Cliente">Cliente</option>  
                        </select>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">ESTADO</label>
                        <select name="estado" class="form-control"required id="exampleFormControlSelect1">
                          <option value="">Seleccione aqui</option>
                          <option value="Activo">Activo</option>
                          <option value="inactivo">inactivo</option>
                        </select>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">FOTO DE PERFIL</label>
                        <input type="file" accept=".jpg, .png, .gif, .jpeg" name="foto" required class="form-control" placeholder="Ej: 12345">
                      </div>
                      <div class="form-group col-md-12" style="text-align: center;">
                        <button class="btn btn-primary" style= "padding: 0.375rem 15rem;"type="submit"> REGISTRAR USUARIO </button>
                      </div>
                      
                      
                    </div>
                  </form>
                </div>
              </div>
             
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong><a href="#">Sabana X</a> &#169; 2021 All Right Reserved</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
