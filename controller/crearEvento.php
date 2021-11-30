<?php
    // Primero generamos la conexion
    require_once("../model/conexion.php");
    // Segundo pedimos las consultas
    require_once("../model/consultasUsuario.php");

    // Apuntamos las variables
    $email = $_POST['email'];
    $titulo = $_POST['titulo'];
    $municipio = $_POST['municipio'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $descripcion = $_POST['descripcion'];
    $costo = $_POST['costo'];
    $categoria= $_POST['categoria'];
    $anunciar= $_POST['anunciar'];
    
    if (isset($_POST['submit'])) {
        $file = $_FILES['imageEvent'];
        $fileName = $_FILES['imageEvent']['name'];
        $fileTmpName = $_FILES['imageEvent']['tmp_name'];
        $fileSize = $_FILES['imageEvent']['size'];
        $fileType = $_FILES['imageEvent']['type'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileSize < 1024000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../upload/fotosEventos/'.$fileNameNew; 
                // http://localhost/sabanax/views/cliente/homeCliente.php
                $fileDestinationRoot = 'upload/fotosEventos/'.$fileNameNew;
                if (strlen($titulo) > 0 && strlen($municipio) > 0 && strlen($costo) > 0 && strlen($fecha) > 0 && strlen($descripcion) > 0 && strlen($categoria) > 0 && strlen($anunciar) > 0) {
                    $consultas = new ConsultasUsuario();
                    $result = $consultas->registrarEvento($email, $titulo, $municipio, $fecha, $hora, $descripcion, $costo, $categoria, $anunciar, $fileDestinationRoot);
                    copy($fileTmpName, $fileDestination);
                    header("Location: ../views/artista/homeArtista.php");
                }else{
                    header("Location: ../views/artista/createEvent.php");
                }
            }else{
                echo 'El archivo es muy grande';
            }
        }else{
            echo 'No se permiten este tipo de archivos';
        }
    }



?>
