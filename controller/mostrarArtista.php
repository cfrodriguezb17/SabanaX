<?php

    function mostrarArtista(){
    $consultas = new consultasUsuario();
    $filas = $consultas->cargarArtsita();
    foreach ($filas as $fila){
        echo '

        <div class="col-lg-4 col-md-6 col-sm-8 col-10 m-auto">
				<div class="blog-post">
                    <div class="post-thumb">
                    <a href="news-single.html">
                    <img src="../'.$fila['foto'].'" class="img-fluid" alt="speaker" style="border-radius: 5%">
                    </a>
                </div>
                <div class="post-content" style="text-align:center">
                    <div class="post-title">
                        <h3>'.$fila['nombres'].' '.$fila['apellidos'].'</h3>
                    </div>
                    <div class="post-meta">
                        <button class="seguirArtista" type="submit">
                            <p class="letraSeguirArtista">Seguir</p>
                        </button>
                    </div>
                </div>
				</div>
			</div>
        ';}
    }

?>