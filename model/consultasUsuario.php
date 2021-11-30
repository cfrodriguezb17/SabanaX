<?php
    class ConsultasUsuario{

        public function registrarEvento($titulo, $municipio, $fecha, $hora, $descripcion, $costo, $categoria, $anunciar, $fileDestination){
            
            $model = new conexion();
            $conexion = $model->get_conexion();

            $insertBD = "INSERT INTO events (titulo, municipio, fecha, hora, descripcion, costo, categoria, anunciar, imagenEvento) VALUES (:titulo, :municipio, :fecha, :hora, :descripcion, :costo, :categoria, :anunciar, :imagenEvento)";


            $statement = $conexion->prepare($insertBD);
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
                return "Error al crear el evento";
            }else{
                $statement->execute();
                return "Registro creado correctamente";
            }
        }
        public function cargarEventos(){
            $rows = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT * FROM events";
            $statement = $conexion->prepare($sql);
            $statement->execute();
            while ($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }

        // CALENDARIO
        public function cargarEventosCalendario(){
            $rows = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT * FROM events";
            $statement = $conexion->prepare($sql);
            $statement->execute();
            while ($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }

        // FIN CALENDARIO
        public function cargarEventosCategoria(){
            $rows = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT * FROM events";
            $statement = $conexion->prepare($sql);
            $statement->execute();
            while ($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }
        public function cargarArtsita(){
            $rows = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT * FROM users WHERE rol = 'Artista'";
            $statement = $conexion->prepare($sql);
            $statement->execute();
            while ($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }
        public function cargarStream(){
            $rows = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT * FROM events WHERE anunciar = 'Si' LIMIT 6";
            $statement = $conexion->prepare($sql);
            $statement->execute();
            while ($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }
        public function buscarEventos($busqueda){
            $rows = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $search = "%".$busqueda."%";
            $sql = "SELECT * FROM events WHERE titulo LIKE :busqueda";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(":busqueda", $search);
            $statement->execute();
            while ($result = $statement->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }
        public function modificarArtista($identificacion, $nickname, $profesion, $bio, $foto) {
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "UPDATE users SET nickname=:nickname, profesion=:profesion, bio=:bio, foto=:foto WHERE identificacion = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $identificacion);
            $statement->bindParam(':nickname', $nickname);
            $statement->bindParam(':profesion', $profesion);
            $statement->bindParam(':bio', $bio);
            $statement->bindParam(':foto', $foto);
            
            if (!$statement) {
                return "Error al modificar el PERFIL";
            }else{
                $statement->execute();
                
            }
        }
        public function cargarEventosDeEsteArtista($email){
            $rows = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT * FROM events WHERE emailUser = :email";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':email', $email);
            $statement->execute();
            while ($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }
    }
