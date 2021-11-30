<?php

    class validarSesion{

        public function iniciarSesion($email, $clave){

            // CREAMOS UN OBJETO DE LA CONEXION PARA UTILIZARLO
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $consultauser = "SELECT * FROM users WHERE email=:email";
            $result = $conexion->prepare($consultauser);


            $result->bindParam(':email', $email);

            $result->execute();

            if ($array = $result->fetch()) {
                
                if ($array['clave'] == $clave) {

                    session_start();
                            $_SESSION['id'] = $array['identificacion'];
                            $_SESSION['email'] = $array['email'];
                            $_SESSION['name'] = $array['nombres'];
                            $_SESSION['lastname'] = $array['apellidos'];
                            $_SESSION['rol'] = $array['rol'];
                            // $_SESSION['estado'] = $array['estado'];
                            
                            $_SESSION['autenticado'] = "SI";
                    
                    if ($array['estado'] == "Activo") {

                        
                        
                        if ($array['rol'] == "Admin") {
                            
                            echo '<script>alert("BIENVENIDO USUARIO ADMINISTRADOR")</script>';
                            echo "<script>location.href='../views/admin/homeAdmin.php'</script>";

                        }

                        if ($array['rol'] == "Cliente") {
                            
                            echo '<script>alert("BIENVENIDO USUARIO CLIENTE")</script>';
                            echo "<script>location.href='../views/cliente/homeCliente.php'</script>";


                        }
                        if ($array['rol'] == "Artista") {
                            
                            echo '<script>alert("BIENVENIDO USUARIO ARTISTA")</script>';
                            echo "<script>location.href='../views/artista/homeArtista.php'</script>";

                        }

                    }else {
                        echo '<script>alert("USUARIO INACTIVO, CONTACTA AL ADMINISTRADOR")</script>';
                        echo "<script>location.href='../views/extras/login.php'</script>";
                    }




                }else {
                    echo '<script>alert("CLAVE INCORRECTA")</script>';
                    echo "<script>location.href='../views/extras/login.php'</script>";
                }


            }else {
                echo '<script>alert("EMAIL NO ENCONTRADO, VERIFIQUE SUS DATOS")</script>';
                echo "<script>location.href='../views/extras/login.php'</script>";
            }
        }

        public function cerrarSesion(){
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            session_start();
            session_destroy();

            echo "<script>location.href='../views/extras/login.php'</script>";
        }
    }

?>