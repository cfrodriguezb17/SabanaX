<?php
	
	require_once("../../model/conexion.php");
	require_once("../../model/consultasAdmin.php");
	require_once("../../model/consultasUsuario.php");
	require_once("../../model/seguridadArtista.php");
	require_once("../../controller/imgArtista.php");
	require_once("../../controller/mostrarArtista.php");
	require_once("../../controller/perfilArtista.php");

  

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artistas | Sabana X</title>
  
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
					<h3>Artistas</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="homeArtista.php">Home</a></li>
				  <li class="breadcrumb-item active">Artistas</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--================================
=            News Posts            =
=================================-->

<section class="news backgroundArtistas">
	<div class="container">
		<div class="row mt-30">
			<?php
                mostrarArtista();
            ?>
			
			<div class="col-12 text-center">
				<!-- Pagination -->
				<nav class="d-flex justify-content-center">
				  <ul class="pagination">
				  	<li class="page-item">
				      <a class="page-link" href="#" aria-label="prev">
				        <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
				        <span class="sr-only">prev</span>
				      </a>
				    </li>
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
				        <span class="sr-only">Next</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--====  End of News Posts  ====-->

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
  <script type="text/javascript" src="../client-site/plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="js/custom.js"></script>
</body>

</html>