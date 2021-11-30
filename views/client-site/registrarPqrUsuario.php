<?php
  require_once("../../model/conexion.php");
  require_once("../../model/consultasAdmin.php");
  require_once("../../controller/listarPqrs.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eventre</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="./plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="./plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="./plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="./plugins/slick/slick.css" rel="stylesheet">
  <link href="./plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="./css/style.css" rel="stylesheet"> 

  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
	<div class="container-fluid p-0">
		<!-- logo -->
		<a class="navbar-brand" href="../../index.php">
		  <img src="images/logo.png" alt="logo" class="logo1">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav mx-auto">
		  <li class="nav-item dropdown dropdown-slide">
			<a class="nav-link" href="../../index.php" >Inicio
			  <span>/</span>
			</a>
		  </li>
		  <li class="nav-item dropdown dropdown-slide">
			<a class="nav-link" href="categorias.php">Categorias<span>/</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="tienda.php">Tienda<span>/</span></a>
		  </li>
		  <li class="nav-item active">
			  <a class="nav-link" href="calendario.php">Calendario<span>/</span></a>
			</li>
		  <li class="nav-item dropdown dropdown-slide">
			<a class="nav-link" href="artistas.php" >Artistas
			  <span>/</span>
			</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="nosotros.php">Nosotros</a>
		  </li>
		  
		  <form class="form-inline">
			  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0 lupa" type="submit">
				  <i class="fa fa-search bntlupa"></i>
			  </button>
			</form>
		</ul>
		<a href="login.html" class="ticket">
			
		  <i class="fa fa-user-circle">
		  
		  </i>
		</a>
		
		</div>
	</div>
  </nav>

<!--====  End of Navigation Section  ====-->




<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>PQRS</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item active">Si quieres reportar una falla o quieres consultar una duda, diligencia el siguiente formulario</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->

<section>
<div class="card-header">
                <h3 class="card-title">Completa los campos para registrar una nueva PQR</h3>
              </div>
<div class="card-body">
                <div class="row">
                  <form class="w-100 size-form" action="../../controller/insertarPqr.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Identificación</label>
                        <input type="number" name="identificacion" class="form-control" id="exampleInputEmail1" placeholder="Escribe por favor tu número de cédula, sin puntos">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">TIPO DE PQR</label>
                        <select name="tipoPqr" class="form-control"required id="exampleFormControlSelect1">
                          <option value="">Seleccione aqui</option>
                          <option value="Fallas">Fallas en el sistema</option>
                          <option value="Dudas">Dudas sobre un tema</option>
                        </select>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">DESCRIPCIÓN</label>
                        <input type="text" name="descripcion" required class="form-control" placeholder="Ej: No me permite modificar mi perfil">
                      </div>
                      <div class="form-group col-md-6">
                        <button class="btn btn-primary" type="submit"> REGISTRAR PQR </button>
                      </div>
                      
                      
                    </div>
                  </form>
                </div>
              </div>


</section>



<footer class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <div class="footer-logo">
              <img src="images/logo.png" alt="logo" class="img-fluid">
            </div>
            <ul class="social-links-footer list-inline">
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-rss"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-vimeo"></i></a>
              </li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="copyright-text">
          <p><a href="#">Sabana X</a> &#169; 2021 All Right Reserved</p>
        </div>
      </div>
      <div class="col-md-6">
          <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>
</footer>


  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="./plugins/jquery/jquery.js"></script>
  <!-- Popper js -->
  <script src="./plugins/popper/popper.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Smooth Scroll -->
  <script src="./plugins/smoothscroll/SmoothScroll.min.js"></script>  
  <!-- Isotope -->
  <script src="./plugins/isotope/mixitup.min.js"></script>  
  <!-- Magnific Popup -->
  <script src="./plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="./plugins/slick/slick.min.js"></script>  
  <!-- SyoTimer -->
  <script src="./plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  <script type="text/javascript" src="plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="js/custom.js"></script>
</body>

</html>