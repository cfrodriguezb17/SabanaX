<?php
  require_once("../../model/conexion.php");
    require_once("../../model/consultasAdmin.php");
    function verEvento(){
        if (isset($_GET['id'])) {
            $monthsOfTheYear = array("none", "Ene", "Feb", "Mar", "Abr", "Mayo", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec");
            $id = $_GET['id'];
            $consultas = new consultasAdmin();
            $filas = $consultas->verEventoDetalle($id);
            foreach ($filas as $fila){
            if ($fila['costo'] == 0) {
                $precio = "<a href='#' class='text-success'>Gratis</a>";
            } else {
                $precio = "<a href='#'>".$fila['costo']."</a>";
            }
                $fechaSeparada = explode("-", $fila['fecha']);
                echo "        
                        <div class='row mt-60'>
                            <div class='col-lg-5 col-md-6 align-self-md-center img-showw'>
                                <div class='image-block img-thumbnail'>
                                    <img src='../../".$fila['imagenEvento']."' class='img-fluid' alt='speaker'>
                                </div>
                            </div>
                            <div class='col-lg-7 col-md-10 mx-auto'>
                                <div class='sidebar'>
                                    <div class='blog-post single'>
                                        <div class='post-content'>
                                            <div class='post-title'>
                                                <h3>".$fila['titulo']."</h3>
                                            </div>
                                                <div class='widget tags'>               
                                                <!-- Widget Header -->
                                                <div class='categorias-show-event-date'>
                                                    <div class='cat-event'>
                                                        <h5 class='widget-header'>Categoria</h5>
                                                        <ul class='list-inline'>
                                                            <li class='list-inline-item'><a href='#'>".$fila['categoria']."</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class='date date-2'>
                                                        <h4>".$fechaSeparada[2]."<span>".$monthsOfTheYear[$fechaSeparada[1]]."</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='post-details'>
                                                <div class='share-block'>
                                                    <div class='tag'>
                                                        <p>
                                                            Locacion: 
                                                        </p>
                                                        <ul class='list-inline'>
                                                            <li class='list-inline-item'>
                                                                <a href='#'>".$fila['municipio']."</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class='tag tag2'>
                                                        <p>
                                                            Hora: 
                                                        </p>
                                                        <ul class='list-inline'>
                                                            <li class='list-inline-item'>
                                                                <a href='#'>".$fila['hora']."</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class='share'>
                                                        <p>
                                                            Compartir: 
                                                        </p>
                                                        <ul class='social-links-share list-inline'>
                                              <li class='list-inline-item'>
                                                <a href='#'><i class='fa fa-facebook'></i></a>
                                              </li>
                                              <li class='list-inline-item'>
                                                <a href='#'><i class='fa fa-twitter'></i></a>
                                              </li>
                                              <li class='list-inline-item'>
                                                <a href='#'><i class='fa fa-instagram'></i></a>
                                              </li>
                                              <li class='list-inline-item'>
                                                <a href='#'><i class='fa fa-whatsapp'></i></a>
                                              </li>
                                                   </ul>
                                                    </div>
                                                </div>
                                                <div class='share-block direccionn'>
                                                    <div class='tag'>
                                                        <p>
                                                            Direccion: 
                                                        </p>
                                                        <ul class='list-inline'>
                                                            <li class='list-inline-item'>
                                                                <a href='#'>Carrera Algo # Algo - 00</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class='tag tag-precio'>
                                                        <p>
                                                            Valor: 
                                                        </p>
                                                        <ul class='list-inline'>
                                                            <li class='list-inline-item'>
                                                                ".$precio."
                                                            </li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <div class='post-meta'>
                                                <ul class='list-inline'>
                                                    <li class='list-inline-item'>
                                                        <i class='fa fa-user-o'></i>
                                                        <a href='#'>".$fila['emailUser']."</a>
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
                                            <div class='post-details'>
                                                <p>".$fila['descripcion']."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
            }
        }
    }

?>
