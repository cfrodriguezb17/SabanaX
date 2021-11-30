<?php
    function perfilArtista(){

        $email = $_SESSION['email'];
        $objetoConsulta = new consultasAdmin();

        $resultado = $objetoConsulta-> imgCliente($email);

        foreach ($resultado as $f) {
            echo '
                
                

                <section class="section single-speaker" style="margin:100px">
                    <div class="container">
                        <div class="block">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 align-self-md-center">
                                    <div class="image-block">
                                        <img src="../'.$f['foto'].'" class="img-fluid" alt="speaker">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 align-self-center">
                                    <div class="content-block">
                                        <div class="name">
                                            <h3>'.$f['nombres'].' '.$f['apellidos'].'</h3>
                                        </div>
                                        <div class="profession">
                                            <p>Cantante</p>
                                        </div>
                                        <div class="details">
                                        <h5>Informacion Personal</h5>
                                            <p>Aqui puedes describirte como artista, tus gustos,
                                            <br>
                                            </p>
                                            <p>
                                            
                                            <br> 
                                            </p>
                                        </div>
                                        <div class="social-profiles">
                                            <h5>Redes Sociales</h5>
                                            <ul class="list-inline social-list">
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
                                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                
            ';
        }
    }

?>