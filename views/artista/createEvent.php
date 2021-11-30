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
  <title>Crear Evento</title>

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
            <h3>Crear Evento</h3>
          </div>
          <ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="homeArtista.php">Home</a></li>
				  <li class="breadcrumb-item active">Crear Evento</li>
				</ol>
        </div>
      </div>
    </div>
  </section>

  <!--====  End of Page Title  ====-->


  <section class="section contact-form">
    <div class="container">
      <form action="../../controller/crearEvento.php" method="POST" class="form-containerr row"
        enctype="multipart/form-data">
        <input type="text" name="email" class="d-none"  value="<?php echo $_SESSION['email']?>">
        <div class="row col-md-6">
          <div class="img-thumbnail imgCreateEvent">
            <img class="imgCreate" src="../client-site/images/evento-1.png" alt="Imagen evento" id="blah">
          </div>
          <!-- Boton subir imagen -->
            <div class="c-upload-btn-wrapper">
              <p>La imagen debe tener proporcion cuadrada para mejor visualizacion*</p>
              <button class="btn btn-transparent-md c-btn">Click <span>aquí</span> para subir una imagen</button>
              <input type="file" name="imageEvent" id="imgInp" accept=".jpg, .png, .gif, .jpeg"
              name="foto" required>
            </div>
          <!-- Boton subir imagen -->

<!-- 
          <div class="imageEventClass-contenedor">
            <input class="imageEventClass" type="file" name="imageEvent" id="imgInp" accept=".jpg, .png, .gif, .jpeg"
              name="foto" required>

          </div> -->
        </div>
        <div class="row col-md-6">
          <div class="col-md-12">
            <input type="text" class="form-control main" name="titulo" id="titulo" placeholder="Titulo">
          </div>
          <div class="col-md-6">
            <input list="municipios" class="form-control main" name="municipio" id="municipio" placeholder="Municipio">
            <datalist id="municipios" placeholder="Chia, Cajica, Zipaquira">
              <option value="Bogota"></option>
              <option value="Cajica"></option>
              <option value="Chia"></option>
              <option value="Cogua"></option>
              <option value="Cota"></option>
              <option value="Gachancipa"></option>
              <option value="Nemocon"></option>
              <option value="Sopo"></option>
              <option value="Tabio"></option>
              <option value="Tenjo"></option>
              <option value="Tocancipa"></option>
              <option value="Zipaquira"></option>
            </datalist>
          </div>
          <div class="col-md-6">
            <input type="number" class="form-control main" name="costo" id="costo"
              placeholder="Costo en pesos colombianos">
          </div>
          <div class="col-md-6">
            <input type="date" class="form-control main" name="fecha" id="fecha" placeholder="Fecha">
          </div>
          <div class="col-md-6">
            <input type="time" class="form-control main" name="hora" id="hora" placeholder="Hora">
          </div>
          <div class="col-md-6">
            <input list="categorias" class="form-control main" name="categoria" id="categoria" placeholder="Categoria">
            <datalist id="categorias" placeholder="Selecciona una categoria">
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
            </datalist>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <select class="form-control main" name="anunciar" id="anunciar">
                <option disabled selected>¿Anunciar?</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <textarea name="descripcion" id="descripcion" class="form-control main" rows="10"
              placeholder="Descripcion de lo que va haber en el evento"></textarea>
          </div>
          <div class="col-12 text-center">
            <button type="submit" name="submit" class="btn btn-main-md">Agregar Evento</button>
          </div>
        </div>
      </form>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script type="text/javascript" src="../client-site/plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="../client-site/js/custom.js"></script>
</body>

</html>