<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sabana X | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/dist/css/register.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card">
    <div class="card-body2">
      <img src="../../views/assets/dist/img/sabana.png" alt="">
    </div>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Iniciar Sesión</p>

      <form action="../../controller/sesion.php" method="POST">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Correo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="clave" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <div class="social-auth-links text-center">
        <p>- O -</p>
        <a href="register.php" class="text-center">Registrarme</a>
      </div>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>
<!-- jQuery -->
<script src="../artista/AdminLTE-3.1.0/AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../artista/AdminLTE-3.1.0/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../artista/AdminLTE-3.1.0/AdminLTE-3.1.0/dist/js/adminlte.min.js"></script>
</body>
</html>
