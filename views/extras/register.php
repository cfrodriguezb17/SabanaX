<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sabana X | Registro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../client-site/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../client-site/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/dist/css/register.css">
</head>
<body class="hold-transition login-page">
  
  
<div class="register-box">

  <div class="card">
    <div class="card-body1">
      <img src="../../views/assets/dist/img/sabana.png" alt="">
    </div>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrarme</p>

      <form action="../../controller/insertarUserE.php" method="POST">
      
      <div class="form-group input-group mb-3">

      
      <select onchange="mostrarInput()" name="rol" class="form-control"required id="inputDinamico">
        <option value="rol">Rol</option>
        <option value="Artista">Artista</option>
        <option value="Cliente">Cliente</option>
      </select>

      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-passport"></span>
        </div>
      </div>
      </div>


      <div class="form-group input-group mb-3">

      
      <select name="tipodoc" class="form-control"required id="exampleFormControlSelect1">
        <option value="Tipo De Documento">Tipo De Documento</option>
        <option value="C.C">C.C</option>
        <option value="T.I">T.I</option>
        <option value="C.E">C.E</option>
        <option value="PASAPORTE">PASAPORTE</option>
      </select>

      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-passport"></span>
        </div>
      </div>
      </div>

      <div class="input-group mb-3">
          <input type="number" name="identificacion" required class="form-control" placeholder="No. Identificación">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
      </div>

      <div id="inputNickname" class="d-none input-group mb-3">
          <input type="text" name="nickname"  class="form-control" placeholder="Nickname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
      </div>


        <div class="input-group mb-3">
          <input type="text" name="nombres" required class="form-control" placeholder="Nombres:">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="apellidos" required class="form-control" placeholder="Apellidos:">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" required class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="texto" name="clave" required class="form-control" placeholder="Clave">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="number" name="telefono" required class="form-control" placeholder="Teléfono">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- O -</p>
        <a href="login.php" class="text-center">Ya tienes una cuenta?</a>
      </div>

    </div>
    <!-- /.form-box -->
  </div>
</div>
  </div>



<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<script type="text/javascript"  src="../client-site/js/custom.js"></script>
</body>
</html>
