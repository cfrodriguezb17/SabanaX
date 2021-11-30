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
	  	
	  	<li class="nav-item dropdown  dropdown-slide">
			<a class="nav-link" href="../cliente/categoriasCliente.php">Categorías<span>/</span></a>
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
		<form action="busqueda.php" class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="busqueda">
			<button class="btn btn-outline-success my-2 my-sm-0 lupa" type="submit">
				<i class="fa fa-search bntlupa"></i>
			</button>
		  </form>
		</li>
		
		
		  
      </ul>
		
			<ul class="navbar-nav mx-auto" style="width:10%; ">
				<li class="nav-item dropdown dropdown-slide icon" >
					<a  class="ticket" style="width:100%; display:flex; align-items:center; justify-content:end" >
						<?php
							perfilCliente();
						?>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						<button class="dropdown-item" type="button">
							<a href="perfilCliente.php">Mi Perfil</a>	
						</button>
						<button class="dropdown-item" type="button">
							<a href="#">Mis Eventos</a>	
						</button>
						<button class="dropdown-item" type="button">
							<a href="#">Mis Artistas</a>	
						</button>
						<button class="dropdown-item" type="button">
							<a href="../../controller/cerrarSesion.php">Cerrar Sesión</a>	
						</button>
					</div>
				</li>
			</ul>
	
			
		
	  
      
	  
      </div>
  </div>
</nav>