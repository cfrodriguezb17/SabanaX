<?php
  require_once("../../model/conexion.php");
  require_once("../../model/consultasAdmin.php");
  require_once("../../controller/listarPqrsUsuario.php");


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
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet"> 

  <!-- FAVICON -->
  <link href="images/logo2.png" rel="shortcut icon">

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
      <ul class="navbar-nav mx-auto" style="align-items:center;">
	  	
		<li class="nav-item">
          	<a class="nav-link" href="views/client-site/categorias.php">Categorias<span>/</span></a>
        </li>
        
		<li class="nav-item">
			<a class="nav-link" href="views/client-site/calendario.php">Calendario<span>/</span></a>
		</li>
		<li class="nav-item">
          <a class="nav-link" href="views/client-site/artistas.php">Artistas<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="views/client-site/nosotros.php">Nosotros</a>
        </li>
		<li class="nav-item search">
		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0 lupa" type="submit">
				<i class="fa fa-search bntlupa"></i>
			</button>
		  </form>
		</li>
		
		
		  
      </ul>
		
	  <ul class="navbar-nav mx-auto">
		<li class="nav-item dropdown dropdown-slide icon">
		  <a  class="ticket">
		  
			<i class="fa fa-user-circle" style="color: white;"> 
				
			</i>
			</a>
			<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
					<button class="dropdown-item" type="button">
						<a href="views\extras\register.php">Registrarme</a>	
					</button>
    				<button class="dropdown-item" type="button">
						<a href="views\extras\login.php">Iniciar Sesión</a>	
					</button>
  				</div>
		  </li>
		</ul>
		
	  
      
	  
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
				  <li class="breadcrumb-item active">En esta sección puedes visualizar las PQRs que has procesado y su estado actual</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--==============================
=            Schedule            =


===============================-->


<section class="content" style="margin: 100px 0px 100px 0px">
      <div class="container" >
		    <div class="row">
		  	  <?php
            cargarPqrsUsuario()
          ?>
		  
		    </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>



<!--====  End of Schedule  ====-->




<!--==============================================
=            Call to Action Subscribe            =
===============================================-->



<!--====  End of Call to Action Subscribe  ====-->

<!--================================
=            Google Map            =
=================================-->


<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->

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
  <script src="plugins/jquery/jquery.js"></script>
  <!-- Popper js -->
  <script src="plugins/popper/popper.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Smooth Scroll -->
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>  
  <!-- Isotope -->
  <script src="plugins/isotope/mixitup.min.js"></script>  
  <!-- Magnific Popup -->
  <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>  
  <!-- SyoTimer -->
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  <script type="text/javascript" src="plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="js/custom.js"></script>
</body>

</html>