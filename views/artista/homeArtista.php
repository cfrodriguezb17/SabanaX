<?php
	
	require_once("../../model/conexion.php");
	require_once("../../model/consultasAdmin.php");
	require_once("../../model/consultasUsuario.php");
	require_once("../../model/seguridadArtista.php");
	require_once("../../controller/imgArtista.php");
	require_once("../../controller/cargarEvento.php");
	require_once("../../controller/streams.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sabana X</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="../client-site/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="../client-site/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="../client-site/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="../client-site/plugins/slick/slick.css" rel="stylesheet">
  <link href="../client-site/plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="../client-site/css/cliente.css" rel="stylesheet">


  <!-- FAVICON -->
  <link href="../client-site/images/logo2.png" rel="shortcut icon">

</head>
<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<?php
	include("../includes/navbarArtista.php");
?>

<!--====  End of Navigation Section  ====-->

<?php
	cargarCarrusel();
?>

<!--============================
=            Banner            =
=============================-->

<div class="container categorias">
	<div class="row cont-carousel-items">

		<div onclick="redireccionarC('categoriasArtista.php#cine')" class="cat-filter col-md-4">
			<div class="card item">
				<div class="card-body cine">
				<h5 class="card-title"> Cine  </b> </h5>
				</div>
			</div>
		</div>

		<div onclick="redireccionarC('categoriasArtista.php#comedia')"  class="cat-filter col-md-4">
			<div class="card item">	
				<div class="card-body comedia">
				<h5 class="card-title"> Comedia </b> </h5>
				</div>
			</div>
		</div>

		<div onclick="redireccionarC('categoriasArtista.php#danza')" class="cat-filter col-md-4">
			<div class="card item">
				<div class="card-body danza">
				<h5 class="card-title"> Danza  </b> </h5>
				</div>
			</div>
		</div>

		<div onclick="redireccionarC('categoriasArtista.php#deportes')" class="cat-filter col-md-4">
			<div class="card item">
				<div class="card-body deportes">
				<h5 class="card-title"> Deportes </b> </h5>
				</div>
			</div>
		</div>

		<div onclick="redireccionarC('categoriasArtista.php#dibujo')" class="cat-filter col-md-4">
			<div class="card item">
				<div class="card-body dibujo">
				<h5 class="card-title"> Dibujo </b> </h5>
				</div>
			</div>
		</div>

		<div onclick="redireccionarC('categoriasArtista.php#escultura')" class="cat-filter col-md-4">
			<div class="card item">
				<div class="card-body escultura">
				<h5 class="card-title"> Escultura </b> </h5>
				</div>
			</div>
		</div>

		<div onclick="redireccionarC('categoriasArtista.php#graficos')" class="cat-filter col-md-4">
			<div class="card item">
				<div class="card-body graficos">
				<h5 class="card-title"> Graficos </b> </h5>
				</div>
			</div>
		</div>

		<div onclick="redireccionarC('categoriasArtista.php#literatura')" class="cat-filter col-md-4">
			<div class="card item">
				<div class="card-body literatura">
				<h5 class="card-title"> Literatura </b> </h5>
				</div>
			</div>
		</div>

		<div onclick="redireccionarC('categoriasArtista.php#musica')" class="cat-filter col-md-4">
			<div class="card item">
				<div class="card-body musica">
				<h5 class="card-title"> Musica </b> </h5>
				</div>
			</div>
		</div>

		<div onclick="redireccionarC('categoriasArtista.php#cultura')" class="cat-filter col-md-4">
			<div class="card item">
				<div class="card-body cultura">
				<h5 class="card-title"> Cultura </b> </h5>
				</div>
			</div>
		</div>

		<div onclick="redireccionarC('categoriasArtista.php#teatro')" class="cat-filter col-md-4">
			<div class="card item">
				<div class="card-body teatro">
				<h5 class="card-title">Teatro</h5>
				</div>
			</div>
		</div>
	</div>

</div>
<!--====  End of Banner  ====-->
<section class="section about" style="background:#00000026">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 align-self-center">
				<div class="image-block bg-about">
					<img class="img-fluid" src="../client-site/images/logo2.png" alt="">
				</div>
			</div>
			<div class="col-lg-8 col-md-6 align-self-center">
				<div class="content-block">
					<h2>Nosotros <span class="alternate">Sabana x</span></h2>
					<div class="description-one">
						<p>
							Plataforma Online (SABANA X) para la gestión de los diversos eventos
							culturales, artísticos y recreativos, que se desarrollan en los municipios que conforman la
							Sabana Centro.	 			
					</div>
					<div class="description-two">
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut labore et dolore magna aliq enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p> -->
					</div>
					<ul class="list-inline">
						
						<li class="list-inline-item">
							<a href="nosotrosArtista.php" class="btn btn-transparent-md" >Leer mas</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--==============================
=            Speakers            =
===============================-->
<section class="section speakers  overlay-lighter ">
	<div class="container recomendados eventosAleatorios">
		<div class="section-title white">
			<h3> <span class="alternate">Eventos</span></h3>
			<!-- <p>Mejores streamers del momento </p> -->
		</div>
		<div class="tarjetas">
			<div class="cols">
				<?php
					cargar();
				?>
			</div>
			
		</div>
	</div>
	<!-- <div class="cta-ticket bg-ticket overlay-dark">
		<div class="image-block"><img src="views/client-site/images/logo2.png" alt="" class="img-fluid"></div>
	</div> -->
</section>







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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
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
  <!-- Google Mapl -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script> -->
  <!-- <script type="text/javascript" src="../client-site/plugins/google-map/gmap.js"></script> -->
  <!-- Custom Script -->
  <script src="../client-site/js/custom.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>



