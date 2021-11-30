<?php
	function cargarEventosdeArtista($email){
		if (isset($email)) {
		$consultas = new ConsultasUsuario();
        $filas = $consultas->cargarEventosDeEsteArtista($email);        
        foreach ($filas as $fila){
        $funChargeJS = "redireccionarC('detalleEvento.php?id=".$fila['id-evento']."')";
        echo "<div onclick=\"$funChargeJS\" class='col-cards' ontouchstart='this.classList.toggle('hover');'>";
        echo "      <div class='container cards'>
                        <div class='front' style='background-image: url(../../".$fila['imagenEvento'].")'>
                            <div class='titulos-cards'>
                                <p>".$fila['titulo']."</p>
                                    <span>".$fila['municipio']."</span>
                                     <span>".$fila['emailUser']."</span>
                            </div>
                        </div>
                        <div class='back'>
                            <div class='titulos-cards'>
                            <p class='pback'>".$fila['descripcion']."</p>
                            </div>
                        </div>
                    </div>
                </div>";
        }
		} else {
			echo "
<div class='col-lg-4 col-md-6 col-sm-8 col-10 m-auto'>
				<div class='blog-post'>
					<div class='post-thumb'>
						<a href='news-single.html'>
							<img src='../client-site/images/news/post-thumb-one.jpg' alt='post-image' class='img-fluid'>
						</a>
					</div>
					<div class='post-content'>
						<div class='date'>
							<h4>20<span>May</span></h4>
						</div>
						<div class='post-title'>
							<h2><a href='news-single.html'>Elementum purus id ultrices.</a></h2>
						</div>
						<div class='post-meta'>
							<ul class='list-inline'>
								<li class='list-inline-item'>
									<i class='fa fa-user-o'></i>
									<a href='#'>Admin</a>
								</li>
								<li class='list-inline-item'>
									<i class='fa fa-heart-o'></i>
									<a href='#'>350</a>
								</li>
								<li class='list-inline-item'>
									<i class='fa fa-comments-o'></i>
									<a href='#'>30</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			";
		}
		
	}
?>