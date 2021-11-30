<?php
	
	require_once("../../model/conexion.php");
	require_once("../../model/consultasAdmin.php");
	require_once("../../model/seguridadCliente.php");
	require_once("../../controller/imgCliente.php");
	require_once('../../model/consultasUsuario.php');
	require_once('../../controller/cargarEvento.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Categorias | Sabana X</title>
  
  <!-- ../client-site/PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="../client-site/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../client-site/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="../client-site/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="../client-site/plugins/slick/slick.css" rel="stylesheet">
  <link href="../client-site/plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="../client-site/css/cliente.css" rel="stylesheet">
  <!-- <link href="../client-site/css/categorias.css" rel="stylesheet"> -->


  <!-- FAVICON -->
  <link href="../client-site/images/logo2.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<?php
	include("../includes/navbarCliente.php");
?>

<!--====  End of Navigation Section  ====-->



<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center ">
				<div class="title ">
					<h3>CATEGORÍAS</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="homeCliente.php">Home</a></li>
				  <li class="breadcrumb-item active">Categorias</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--=============================
=            Gallery            =
==============================-->


<section class="section gallery">
	<div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
		<section id="neones">
				<div class="row col-12 artes">		
					
				
				<option value="Arquitectura"></option>
              <option value="Cine"></option>
              <option value="Comedia"></option>
              <option value="Danza"></option>
              <option value="Deportes"></option>
              <option value="Dibujo"></option>
              <option value="Escultura"></option>
              <option value="Graficos"></option>
              <option value="Literatura"></option>
              <option value="Musica"></option>
              <option value="Teatro"></option>
					
					<a class="btn-neon mixitup-control-active" id="todos" style="font-size: 18px" data-filter="all">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>					
						Ver todos</a>
					<a class="btn-neon" style="font-size: 18px"  id="cine" data-filter=".Cine">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Cine
					</a>
					<a class="btn-neon" style="font-size: 18px"  id="comedia" data-filter=".Comedia">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Comedia</a>
					<a class="btn-neon" style="font-size: 18px"  id="danza" data-filter=".Danza">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Danza
					</a>
					<a class="btn-neon" style="font-size: 18px"  id="deportes" data-filter=".Deportes">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Deportes
					</a>
				</div>
				<div class="row col-12 artes">	
					<a class="btn-neon" style="font-size: 18px"  id="dibujo" data-filter=".Dibujo">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Dibujo	
					</a>
					<a class="btn-neon" style="font-size: 18px"  id="escultura" data-filter=".Escultura">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Escultura
					</a>
					<a class="btn-neon" style="font-size: 18px" id="graficos" data-filter=".Graficos">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Graficos
					</a>
					<a class="btn-neon" style="font-size: 18px" id="literatura" data-filter=".Literatura">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Literatura
					</a>
					<a class="btn-neon" style="font-size: 18px" id="musica" data-filter=".Musica">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Musica
					</a>
					<a class="btn-neon" style="font-size: 18px" id="teatro" data-filter=".Teatro">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Teatro
					</a>
				
		</section>
			
		
		<div class="row">
			<div class="col-12">		

				<div class="gallery-wrapper">

				<?php
					cargarCategorias()

				?>

				</div>
			</div>
		</div>
	</div>
</section>


<!--====  End of Gallery  ====-->



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
            <img src="../client-site/images/logo.png" alt="logo" class="img-fluid">
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
  <script src="../client-site/plugins/jquery/jquery.js"></script>
  <!-- Popper js -->
  <script src="../client-site/plugins/popper/popper.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../client-site/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Smooth Scroll -->
  <script src="../client-site/plugins/smoothscroll/SmoothScroll.min.js"></script>  
  <!-- Isotope -->
  <script src="../client-site/plugins/isotope/mixitup.min.js"></script>  
  <!-- Magnific Popup -->
  <script src="../client-site/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="../client-site/plugins/slick/slick.min.js"></script>  
  <!-- SyoTimer -->
  <script src="../client-site/plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Custom Script -->
  <script src="../client-site/js/custom.js"></script>
  <!-- Custo 2 js -->
  <script src="../client-site/js/main.js"></script>
</body>

</html>