<?php
	
	require_once("../../model/conexion.php");
	require_once("../../model/consultasAdmin.php");
	require_once("../../model/seguridadArtista.php");
	require_once("../../controller/imgArtista.php");
  

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nosotros | Sabana X</title>
  
  <!-../client-site/PLUGINS CSS STYLE -->
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



<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>NOSOSTROS</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="homeArtista.php">Home</a></li>
				  <li class="breadcrumb-item active">Nosotros</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--===========================
=            About            =
============================-->

<section class="section about" style="background:#00000026">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 align-self-center">
				<div class="image-block bg-about">
					<img class="img-fluid" src="../../views/client-site/images/logo2.png" alt="">
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
						
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of About  ====-->

<!--==============================
=            Speakers            =
===============================-->

<section class="section speakers bg-speaker overlay-lighter">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section Title -->
				<div class="section-title white">
					<h3> <span class="alternate">Grupo de trabajo</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusm tempor incididunt ut labore</p>
				</div>
			</div>
		</div>
		<div class="row" style="justify-content:center" >
			
				<!-- Speaker 1 -->
				
			
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 2 -->
				<div class="speaker-item">
					<div class="image">
						<img src="../client-site/images/speakers/speaker-two.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Carlos</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 3 -->
				<div class="speaker-item">
					<div class="image">
						<img src="../client-site/images/speakers/speaker-three.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Daniel</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 4 -->
				<div class="speaker-item">
					<div class="image">
						<img src="../client-site/images/speakers/speaker-four.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Duvan</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 5 -->
				
			</div>
			<div class="row" style="justify-content:center">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 1 -->
				<div class="speaker-item">
					<div class="image">
						<img src="../client-site/images/speakers/speaker-six.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Kevin</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 7 -->
				<div class="speaker-item">
					<div class="image">
						<img src="../client-site/images/speakers/speaker-five.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Deissy</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 8 -->
				<div class="speaker-item">
					<div class="image">
						<img src="../client-site/images/speakers/speaker-six.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">kevin</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
		</div>
			
	
	</div>
</section>

<!--====  End of Speakers  ====-->


<!--=================================
=            Testimonial            =
==================================-->



<!--====  End of Testimonial  ====-->



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
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  <script type="text/javascript" src../client-site/plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="js/custom.js"></script>
</body>

</html>
