<?php
	
	require_once("../../model/conexion.php");
	require_once("../../model/consultasAdmin.php");
	require_once("../../model/consultasUsuario.php");
	require_once("../../model/seguridadCliente.php");
	require_once("../../controller/imgCliente.php");
	require_once("../../controller/calendarioEventos.php");
  

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calendario | Sabana X</title>
  
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
  <!-- Calendario -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js"></script>



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
					<h3>Calendario de eventos</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item active">Calendario Eventos</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--==============================
=            Schedule            =
===============================-->

<section class="section schedule">
	<div class="container">
<!-- 		<div class="row">
			<div class="container py-5">

				<div class="calendar shadow bg-white p-5">
				  <div class="d-flex align-items-center"><i class="fa fa-calendar fa-3x mr-3"></i>
					<h2 class="month font-weight-bold mb-0 text-uppercase">September 2021</h2>
				  </div>
				  <p class="font-italic text-muted mb-5">No events for this day.</p>
				  <ol class="day-names list-unstyled">
					<li class="font-weight-bold text-uppercase">Sun</li>
					<li class="font-weight-bold text-uppercase">Mon</li>
					<li class="font-weight-bold text-uppercase">Tue</li>
					<li class="font-weight-bold text-uppercase">Wed</li>
					<li class="font-weight-bold text-uppercase">Thu</li>
					<li class="font-weight-bold text-uppercase">Fri</li>
					<li class="font-weight-bold text-uppercase">Sat</li>
				  </ol>
			  
				  <ol class="days list-unstyled">
					<li>
					  <div class="date">1</div>
					  <div class="event bg-success">Event with Long Name</div>
					</li>
					<li>
					  <div class="date">2</div>
					</li>
					<li>
					  <div class="date">3</div>
					</li>
					<li>
					  <div class="date">4</div>
					</li>
					<li>
					  <div class="date">5</div>
					</li>
					<li>
					  <div class="date">6</div>
					</li>
					<li>
					  <div class="date">7</div>
					</li>
					<li>
					  <div class="date">8</div>
					</li>
					<li>
					  <div class="date">9</div>
					</li>
					<li>
					  <div class="date">10</div>
					</li>
					<li>
					  <div class="date">11</div>
					</li>
					<li>
					  <div class="date">12</div>
					</li>
					<li>
					  <div class="date">13</div>
					  <div class="event all-day begin span-2 bg-warning">Event Name</div>
					</li>
					<li>
					  <div class="date">14</div>
					</li>
					<li>
					  <div class="date">15</div>
					  <div class="event all-day end bg-success">Event Name</div>
					</li>
					<li>
					  <div class="date">16</div>
					</li>
					<li>
					  <div class="date">17</div>
					</li>
					<li>
					  <div class="date">18</div>
					</li>
					<li>
					  <div class="date">19</div>
					</li>
					<li>
					  <div class="date">20</div>
					</li>
					<li>
					  <div class="date">21</div>
					  <div class="event bg-primary">Event Name</div>
					  <div class="event bg-success">Event Name</div>
					</li>
					<li>
					  <div class="date">22</div>
					  <div class="event bg-info">Event with Longer Name</div>
					</li>
					<li>
					  <div class="date">23</div>
					</li>
					<li>
					  <div class="date">24</div>
					</li>
					<li>
					  <div class="date">25</div>
					</li>
					<li>
					  <div class="date">26</div>
					</li>
					<li>
					  <div class="date">27</div>
					</li>
					<li>
					  <div class="date">28</div>
					</li>
					<li>
					  <div class="date">29</div>
					</li>
					<li>
					  <div class="date">30</div>
					</li>
					<li>
					  <div class="date">31</div>
					</li>
					<li class="outside">
					  <div class="date">1</div>
					</li>
					<li class="outside">
					  <div class="date">2</div>
					</li>
					<li class="outside">
					  <div class="date">3</div>
					</li>
					<li class="outside">
					  <div class="date">4</div>
					</li>
				  </ol>
				</div>
			  </div>
		</div> -->
	<!--  Calendario -->
	<div class="mt-4"></div>
	<div id='calendar'></div>
	<div class="mb-4"></div>
	</div>
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
  <script type="module" src="calendario/calendar.js"></script>
</body>

</html>