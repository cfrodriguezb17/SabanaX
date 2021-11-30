<?php
	require_once('../../model/conexion.php');
  require_once("../../model/consultasAdmin.php");
	require_once('../../model/consultasUsuario.php');
  require_once("../../model/seguridadCliente.php");
	require_once('../../controller/buscarEventos.php');
  require_once("../../controller/imgCliente.php");
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
  include("../includes/navbarCliente.php");
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
          <h3>BUSQUEDA</h3>
        </div>
        <ol class="breadcrumb p-0 m-0">
          <li class="breadcrumb-item"><a href="homeCliente.php">Home</a></li>
          <li class="breadcrumb-item active">Buscar</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!--====  End of Page Title  ====-->


<!--===========================
=            About            =
============================-->

<!--====  End of About  ====-->

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
        <?php buscar(); ?>
      </div>
      
    </div>
  </div>
  <!-- <div class="cta-ticket bg-ticket overlay-dark">
    <div class="image-block"><img src="views/client-site/images/logo2.png" alt="" class="img-fluid"></div>
  </div> -->
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