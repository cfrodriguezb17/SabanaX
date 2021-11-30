<?php
	
	require_once("../../model/conexion.php");
	require_once("../../model/consultasAdmin.php");
	require_once("../../model/seguridadAdmin.php");
	require_once("../../controller/imgCliente.php");
  

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sabana X</title>
  
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
  <link href="../client-site/css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="../client-site/images/logo2.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="../cliente/homeCliente.php">
        <img src="../client-site/images/logo.png" alt="logo" class="logo1">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto" style="align-items:center;">
	  	
	  	<li class="nav-item dropdown active dropdown-slide">
			<a class="nav-link" href="../cliente/categoriasCliente.php">Categorias<span>/</span></a>
		  </li>
		  
		  <li class="nav-item">
			  <a class="nav-link" href="../cliente/calendarioCliente.php">Calendario<span>/</span></a>
			</li>
		  <li class="nav-item dropdown dropdown-slide">
			<a class="nav-link" href="../cliente/artistasCliente.php" >Artistas
			  <span>/</span>
			</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="../cliente/nosotrosCliente.php">Nosotros</a>
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
		
	  <ul class="navbar-nav mx-auto" style="width:4%; ">
		<li class="nav-item dropdown dropdown-slide icon" style="width:100%;" >
		  <a  class="ticket" style="width:100%;display: flex; align-items:center" >
		  
			<?php
				perfilCliente();
			?>
				
			
			</a>
			<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
					<button class="dropdown-item" type="button">
						<a href="views\extras\register.php">Mi Perfil</a>	
					</button>
    				<button class="dropdown-item" type="button">
						<a href="views\extras\login.php">Cerrar Sesión</a>	
					</button>
  				</div>
		  </li>
		</ul>
		
	  
      
	  
      </div>
  </div>
</nav>
<!--====  End of Navigation Section  ====-->

<section class="news section">
	<div class="container">
		<div class="row mt-30">
			<div class="col-lg-5 col-md-6 align-self-md-center img-showw">
				<div class="image-block img-thumbnail">
					<img src="../../upload/fotosEventos/6198578a077662.13222229.jpg" class="img-fluid" alt="speaker">
				</div>
			</div>
			<div class="col-lg-7 col-md-10 mx-auto">
				<div class="sidebar">
					<div class="blog-post single">
						<div class="post-content">
							<div class="post-title">
								<h3>Auto Show</h3>
							</div>
								<div class="widget tags">				
								<!-- Widget Header -->
									<div class="categorias-show-event-date">
										<div class="cat-event">
											<h5 class="widget-header">Categoria</h5>
												<ul class="list-inline">
													<li class="list-inline-item"><a href="#">Escultura</a></li>
												</ul>
										</div>
										<div class="date date-2">
											<h4>20<span>May</span></h4>
										</div>
									</div>
							</div>
							<div class="post-details">
								<div class="share-block">
									<div class="tag">
										<p>
											Locacion: 
										</p>
										<ul class="list-inline">
											<li class="list-inline-item">
												<a href="#">Bogota</a>
											</li>
										</ul>
									</div>
									<div class="tag tag2">
										<p>
											Hora: 
										</p>
										<ul class="list-inline">
											<li class="list-inline-item">
												<a href="#">20:30</a>
											</li>
										</ul>
									</div>
									<div class="share">
										<p>
											Compartir: 
										</p>
										<ul class="social-links-share list-inline">
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
				                <a href="#"><i class="fa fa-whatsapp"></i></a>
				              </li>
							       </ul>
									</div>
								</div>
								<div class="share-block direccionn">
									<div class="tag">
										<p>
											Direccion: 
										</p>
										<ul class="list-inline">
											<li class="list-inline-item">
												<a href="#">Carrera Algo # Algo - 00</a>
											</li>
										</ul>
									</div>
									<div class="tag tag-precio">
										<p>
											Precio: 
										</p>
										<ul class="list-inline">
											<li class="list-inline-item">
												<a href="#">100.000</a>
											</li>
										</ul>
									</div>
							</div>
							<div class="post-meta">
								<ul class="list-inline">
									<li class="list-inline-item">
										<i class="fa fa-user-o"></i>
										<a href="#">Gas Monkey</a>
									</li>
									<li class="list-inline-item">
										<i class="fa fa-heart-o"></i>
										<a href="#">350</a>
									</li>
									<li class="list-inline-item">
										<i class="fa fa-comments-o"></i>
										<a href="#">30</a>
									</li>
								</ul>
							</div>
							<div class="post-details">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud.laboris nisi ut aliquip ex ea commodo conse
									quat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
								<p>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-30">
			<div class="col-lg-8 mx-auto comentarios-show-event">
					<div class="comments">
						<h5>Comments (3)</h5>
						<!-- Comment -->
						<div class="media comment">
							<img src="../client-site/images/speakers/speaker-thumb-four.jpg" alt="image">
							<div class="media-body">
								<h6>Jessica Brown</h6>
								<ul class="list-inline">
									<li class="list-inline-item"><span class="fa fa-calendar"></span>Mar 20, 2016</li>
									<li class="list-inline-item"><a href="#">Reply</a></li>
								</ul>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant tota rem ape riamipsa eaque  quae nisi ut aliquip commodo consequat. 
								</p>
								<!-- Nested Comment -->
								<div class="media comment">
									<img src="../client-site/images/speakers/speaker-thumb-three.jpg" alt="image">
									<div class="media-body">
										<h6>Jonathan Doe</h6>
										<ul class="list-inline">
											<li class="list-inline-item"><span class="fa fa-calendar"></span>Mar 20, 2016</li>
										</ul>
										<p>
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant tota rem ape riamipsa eaque  quae nisi 
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Comment -->
						<div class="media comment">
							<img src="../client-site/images/speakers/speaker-thumb-two.jpg" alt="image">
							<div class="media-body">
								<h6>Adam Smith</h6>
								<ul class="list-inline">
									<li class="list-inline-item"><span class="fa fa-calendar"></span>Mar 20, 2016</li>
									<li class="list-inline-item"><a href="#">Reply</a></li>
								</ul>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant tota rem ape riamipsa eaque  quae nisi ut aliquip commodo consequat. 
								</p>
							</div>
						</div>
					</div>
					<div class="comment-form">
						<h5>Leave A Comment</h5>
						<form action="#" class="row">
							<div class="col-12">
								<textarea class="form-control main" name="comment" id="comment" rows="10" placeholder="Your Review"></textarea>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control main" name="text" id="name" placeholder="Your Name">
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control main" name="email" id="email" placeholder="Your Email">
							</div>
							<div class="col-12">
								<button class="btn btn-main-md" type="submit">Submit Now</button>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</section>


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