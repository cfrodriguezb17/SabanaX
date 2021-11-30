<?php
    function perfil(){


        $email = $_SESSION['email'];
        $objetoConsulta = new consultasAdmin();

        $resultado = $objetoConsulta-> verPerfil($email);

        foreach ($resultado as $f) {
            echo '
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../'.$f['foto'].'" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">'.$f['nombres'].' '.$f['apellidos'].'</a>
                    <small class="rol-menu"; style="color: #ffffff">'.$f['rol'].'</small>
                </div>
            </div> 
            ';
        }
    }

?>