<?php

    class consultasAdmin{

        // MODULO GESTION USUARIOS
        public function insertarUser($identificacion, $tipodoc, $nombres, $apellidos, $email, $telefono, $clavemd, $rol, $estado, $foto){
            

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
                $insertarUser = "INSERT INTO users (identificacion, tipodoc, nombres, apellidos, email, telefono, clave, rol, estado, foto) VALUES (:identificacion, :tipodoc, :nombres, :apellidos, :email, :telefono, :clavemd, :rol, :estado, :foto)";
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

                if (!$statement) {
                    echo '<script>alert("ERROR EN LOS DATOS DEL SISTEMA)</script>';
                    echo "<script>location.href='../views/extras/register.php'</script>"; 
                }else {
                    $statement->execute();
                    echo '<script>alert("USUARIO REGISTRADO CON EXITO)</script>';
                    echo "<script>location.href='../views/admin/registrarUsuarios.php'</script>"; 
                    
                }



            }
        }

        public function listarUsers(){
            $f = null;
            // CREAMOS UN OBJETO DE LA CLASE CONEXION
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $listar = "SELECT * FROM users";
            $statement = $conexion->prepare($listar);
            $statement->execute();

            while ($resultado = $statement->fetch()) {
                $f[] = $resultado;

            }
            return $f;

        }

        public function listarUser($id_modificar){

            $f = null;
            // CREAMOS UN OBJETO DE LA CLASE CONEXION
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $listar = "SELECT * FROM users WHERE identificacion=:id_modificar";
            $statement = $conexion->prepare($listar);
            $statement -> bindParam(':id_modificar', $id_modificar);
            $statement->execute();

            while ($resultado = $statement->fetch()) {
                $f[] = $resultado;

            }
            return $f;

        }

        public function actualizarUser($identificacion, $tipodoc, $nombres, $apellidos, $email, $telefono, $clave, $rol, $estado){
            
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $actualizar = "UPDATE users SET identificacion=:identificacion, tipodoc=:tipodoc, nombres=:nombres, apellidos=:apellidos, email=:email, telefono=:telefono, clave=:clave, rol=:rol, estado=:estado WHERE identificacion=:identificacion";

            $statement = $conexion->prepare($actualizar);
            $statement -> bindParam(':identificacion', $identificacion);
            $statement -> bindParam(':tipodoc', $tipodoc);
            $statement -> bindParam(':nombres', $nombres);
            $statement -> bindParam(':apellidos', $apellidos);
            $statement -> bindParam(':email', $email);
            $statement -> bindParam(':telefono', $telefono);
            $statement -> bindParam(':clave', $clave);
            $statement -> bindParam(':rol', $rol);
            $statement -> bindParam(':estado', $estado);

            if (!$statement) {
                echo '<script>alert("ERROR EN EL SISTEMA)</script>';
                echo "<script>location.href='../views/admin/registrarUsuarios.php'</script>"; 
            }else {
                $statement->execute();
                echo '<script>alert("USUARIO ACTUALIZADOCON EXITO)</script>';
                echo "<script>location.href='../views/admin/verUsuarios.php'</script>"; 
                
            }
        }

        public function eliminarUser($arg_identificacion){
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $sql = "DELETE FROM users WHERE identificacion = :identificacion";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':identificacion', $arg_identificacion);
            if (!$statement) {
                return "Error al eliminar producto";
            }else{
                $statement->execute();
                echo '<script>alert("USUARIO ELIMINADO CORRECTAMENTE")</script>';
                echo "<script>location.href='../views/admin/verUsuarios.php'</script>";
            }
        }

        public function verPerfil($email){

            $f =  null;
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $consultarPerfil = "SELECT * FROM users WHERE email=:email";
            $statement = $conexion->prepare($consultarPerfil);


            $statement->bindParam(':email', $email );
            $statement->execute();

            while ($result = $statement->fetch()) {
                $f[] = $result;
            }
            return $f;
        }

        public function imgCliente($email){

            $f =  null;
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $consultarPerfil = "SELECT * FROM users WHERE email=:email";
            $statement = $conexion->prepare($consultarPerfil);


            $statement->bindParam(':email', $email );
            $statement->execute();

            while ($result = $statement->fetch()) {
                $f[] = $result;
            }
            return $f;
        }
        // INICIO MODULO EVENTOS ADMIN

        public function listarEventos(){
            $f = null;
            // CREAMOS UN OBJETO DE LA CLASE CONEXION
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $listar = "SELECT * FROM events";
            $statement = $conexion->prepare($listar);
            $statement->execute();

            while ($resultado = $statement->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }
        public function cargarEventoA($id){
            $rows = null;
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT * FROM events WHERE `id-evento` = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(":id", $id);
            $statement->execute();
            while ($result = $statement->fetch()) {
                $rows[] = $result;
            }
            // eskeere
            return $rows;
        }
        public function eliminarEvento($arg_id){
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $sql = "DELETE FROM events WHERE `id-evento` = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $arg_id);
            if (!$statement) {
                return "Error al eliminar el evento";
            }else{
                $statement->execute();
                echo '<script>alert("EVENTO ELIMINADO CORRECTAMENTE")</script>';
                echo "<script>location.href='../views/admin/verEventos.php'</script>";
            }
        }
        public function modificarEventoAdmin($id, $email, $titulo, $municipio, $fecha, $hora, $descripcion, $costo, $categoria, $anunciar, $fileDestination){
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $sql = "UPDATE events SET emailUser=:email, titulo=:titulo, municipio=:municipio, fecha=:fecha, hora=:hora, descripcion=:descripcion, costo=:costo, categoria=:categoria, anunciar=:anunciar, imagenEvento=:imagenEvento WHERE `id-evento` = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id );
            $statement->bindParam(':email', $email );
            $statement->bindParam(':titulo', $titulo );
            $statement->bindParam(':municipio', $municipio );
            $statement->bindParam(':fecha', $fecha );
            $statement->bindParam(':hora', $hora );
            $statement->bindParam(':descripcion', $descripcion );
            $statement->bindParam(':costo', $costo );
            $statement->bindParam(':categoria', $categoria);
            $statement->bindParam(':anunciar', $anunciar);
            $statement->bindParam(':imagenEvento', $fileDestination);
            if (!$statement) {
                return "Error al modificar el evento";
            }else{
                $statement->execute();
                echo '<script>alert("EVENTO MODIFICADO CORRECTAMENTE")</script>';
                echo "<script>location.href='../views/admin/verEventos.php'</script>";
            }
        }
        public function verEventoDetalle($id){
            $rows = null;
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT * FROM events WHERE `id-evento` = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(":id", $id);
            $statement->execute();
            while ($result = $statement->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }

        // FIN MODULO EVENTOS ADMIN


        //INICIO MODULO PQRS ADMIN

        public function insertarPqrs($identificacion, $tipoPqr, $descripcion, $estado){
            

            // CREAMOS UN OBJETO DE LA CONEXION PARA UTILIZARLO
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();
            
            // VALIDAMOS QUE NO SE REPITA LAS LLAVES PRIMARIAS (PK) O LLAVES FORANEAS (FK)
            $consultaUser = "SELECT * FROM users WHERE identificacion= :identificacion";
            $result = $conexion->prepare($consultaUser);

            $result->bindParam(':identificacion', $identificacion);
            
            $result->execute();


            $array = $result->fetch();

            if (!$array) {
                echo '<script>alert("PARA PODER COMUNICAR UNA PQR, POR FAVOR REGÍSTRESE EN NUESTRO SISTEMA")</script>';
                echo "<script>location.href='../views/extras/register.php'</script>";
            }else {

                $objetoConexion = new conexion();
                $conexion = $objetoConexion->get_conexion();
                // TABLA, CAMPOS DE LA TABLA, VALORES, ARGUMENTOS CONVERTIDOS EN PARAMETROS POR MEDIO DE LOS :
                $insertarUser = "INSERT INTO pqrs (idPqr, identificacion, tipoPqr, descripcion, estado) VALUES (:idPqr, :identificacion, :tipoPqr, :descripcion, :estado)";
                $statement = $conexion->prepare($insertarUser);

                $statement->bindParam(':idPqr',$idPqr );
                $statement->bindParam(':identificacion',$identificacion );
                $statement->bindParam(':tipoPqr', $tipoPqr );
                $statement->bindParam(':descripcion', $descripcion );
                $statement->bindParam(':estado', $estado );
               

                if (!$statement) {
                    echo '<script>alert("POR FAVOR, DILIGENCIE CORRECTAMENTE TODOS LOS CAMPOS)</script>';
                    echo "<script>location.href='../views/admin/registrarPqrs.php'</script>"; 
                }else {
                    $statement->execute();
                    echo '<script>alert("PQR REGISTRADA CON EXITO")</script>';
                    echo "<script>location.href='../views/client-site/verPqrUsuario.php'</script>";
                }
            }
        }

        public function listarPqrs(){
            $f = null;
            // CREAMOS UN OBJETO DE LA CLASE CONEXION
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $listar = "SELECT * FROM pqrs";
            $statement = $conexion->prepare($listar);
            $statement->execute();

            while ($result = $statement->fetch()) {
                $f[] = $result;

            }
            return $f;

        }


        public function listarPqr($id_modificar){
            $f = null;
            // CREAMOS UN OBJETO DE LA CLASE CONEXION
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $listar = "SELECT * FROM pqrs WHERE idPqr=:id_modificar";
            $statement = $conexion->prepare($listar);
            $statement->bindParam(':id_modificar', $id_modificar);
            $statement->execute();

            while ($result = $statement->fetch()) {
                $f[] = $result;

            }
            return $f;

        }


        public function modificarPqrs(){
            $f = null;
            
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $modificar = "SELECT * FROM pqrs WHERE identificacion= $identificacion ";
            $statement = $conexion->prepare($modificar);
            $statement->execute();

            while ($resultado = $statement->fetch()) {
                $f[] = $resultado;

            }
            return $f;

        }


        public function eliminarPqr($id_eliminar){
            $f = null;
            
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $eliminar = "DELETE FROM pqrs WHERE idPqr=:id_eliminar";
            $statement = $conexion->prepare($eliminar);
            $statement->bindParam(':id_eliminar', $id_eliminar);
            $statement->execute();

            while ($resultado = $statement->fetch()) {
                $f[] = $resultado;

            }
            return $f;

        }


        public function actualizarPqr($idPqr, $identificacion, $tipoPqr, $descripcion, $estado){

            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $actualizar = "UPDATE pqrs SET identificacion=:identificacion, tipoPqr=:tipoPqr, descripcion=:descripcion, estado=:estado WHERE idPqr=:idPqr";

            $statement = $conexion ->prepare ($actualizar);
            $statement->bindParam(':idPqr', $idPqr);
            $statement->bindParam(':identificacion', $identificacion);
            $statement->bindParam(':tipoPqr', $tipoPqr);
            $statement->bindParam(':descripcion', $descripcion);
            $statement->bindParam(':estado', $estado);


            if (!$statement) {
                echo "<script>alert('ERROR EN EL SISTEMA')</script>";
                echo '<script>location.href="../views/admin/modificarPqrs.php"</script>'; 
            }else {
                $statement->execute();
                echo "<script>alert('PQR ACTUALIZADA CON ÉXITO')</script>";
                echo '<script>location.href="../views/admin/verPqrs.php"</script>';
            }



        }

        // FIN MODUULO PQRS ADMIN
    }

?>