<?php

    class consultasE
    {
        // LA FUNCION DEBE SER NOMBRADA IGUAL QUE EN EL CONTROLADOR Y SE ENVIAN LOS MISMOS VALORES
        public function registraUserE($identificacion, $tipodoc, $nombres, $apellidos, $email, $telefono, $clavemd, $rol, $estado, $foto, $nickname, $profesion, $bio){

            // CREAMOS UN OBJETO DE LA CONEXION PARA UTILIZARLO
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();
            
            // VALIDAMOS QUE NO SE REPITA LAS LLAVES PRIMARIAS (PK) O LLAVES FORANEAS (FK)
            $consultaUser = "SELECT * FROM users WHERE identificacion= :identificacion OR email= :email";
            $result = $conexion->prepare($consultaUser);

            $result->bindParam(':identificacion', $identificacion);
            $result->bindParam(':email', $email);


            $result->execute();


            $array = $result->fetch();

            if ($array) {
                echo '<script>alert("SUS DATOS YA SE ENCUENTRAN REGISTRADOS EN EL SISTEMA, POR FAVOR VERIFIQUE SU INFORMACION")</script>';
                echo "<script>location.href='../views/extras/register.php'</script>";
            }else {

                $objetoConexion = new conexion();
                $conexion = $objetoConexion->get_conexion();
                // TABLA, CAMPOS DE LA TABLA, VALORES, ARGUMENTOS CONVERTIDOS EN PARAMETROS POR MEDIO DE LOS :
                $insertarUser = "INSERT INTO users (identificacion, tipodoc, nombres, apellidos, email, telefono, clave, rol, estado, foto, nickname, profesion, bio) VALUES (:identificacion, :tipodoc, :nombres, :apellidos, :email, :telefono, :clavemd, :rol, :estado, :foto, :nickname, :profesion, :bio)";
                $statement = $conexion->prepare($insertarUser);

                $statement->bindParam(':identificacion',$identificacion );
                $statement->bindParam(':tipodoc', $tipodoc );
                $statement->bindParam(':nombres', $nombres );
                $statement->bindParam(':apellidos', $apellidos );
                $statement->bindParam(':email', $email );
                $statement->bindParam(':telefono', $telefono);
                $statement->bindParam(':clavemd', $clavemd );
                $statement->bindParam(':rol', $rol);
                $statement->bindParam(':estado', $estado);
                $statement->bindParam(':foto', $foto);
                $statement->bindParam(':nickname', $nickname);
                $statement->bindParam(':profesion', $profesion);
                $statement->bindParam(':bio', $bio);

                if (!$statement) {
                    echo '<script>alert("ERROR EN LOS DATOS DEL SISTEMA)</script>';
                    echo "<script>location.href='../views/extras/register.php'</script>"; 
                }else {
                    $statement->execute();
                    echo '<script>alert("USUARIO REGISTRADO CON EXITO")</script>';
                    echo "<script>location.href='../views/extras/login.php'</script>";
                }



            }
        }

    }

?>