<?php
  
  require_once("../../model/conexion.php");
  require_once("../../model/consultasAdmin.php");
  require_once("../../model/consultasUsuario.php");
  require_once("../../model/seguridadCliente.php");
  require_once("../../controller/imgCliente.php");
  require_once("../../controller/cargarEvento.php");
  /*require_once("../../controller/crearEventoBase.php");*/

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modificar Evento</title>

  <!-- ../client-site/plugins CSS STYLE -->
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
  <link href="../client-site/css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon">

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
            <h3>Editar Evento Admin</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====  End of Page Title  ====-->


  <section class="section contact-form">
    <div class="container">
      <?php
        cargarModificarAdmin();
      ?>
    </div>
  </section>

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
              <img src="./images/logo.png" alt="logo" class="img-fluid">
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script type="text/javascript" src="../client-site/plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="js/custom.js"></script>
</body>

</html>