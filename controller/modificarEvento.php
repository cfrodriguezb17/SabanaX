<?php
    // Primero generamos la conexion

    require_once("../model/conexion.php");
    // Segundo pedimos las consultas
    require_once("../model/consultasAdmin.php");

    // Apuntamos las variables
    $id = $_POST['id'];
    $email = $_POST['email'];
    $titulo = $_POST['titulo'];
    $municipio = $_POST['municipio'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $descripcion = $_POST['descripcion'];
    $costo = $_POST['costo'];
    $categoria= $_POST['categoria'];
    $anunciar= $_POST['anunciar'];
    $fileDestinationRoot = $_POST['imageEventBefore'];

    if (isset($_POST['submit'])) {
        // Si trae o no una imagen
        if ($_FILES['imageEvent']['tmp_name'] == '') {
            // Esta vacio
            if (strlen($titulo) > 0 && strlen($municipio) > 0 && strlen($costo) > 0 && strlen($fecha) > 0 && strlen($descripcion) > 0 && strlen($categoria) > 0 && strlen($anunciar) > 0) {
                $consultas = new consultasAdmin();
                        $result = $consultas->modificarEventoAdmin($id, $email, $titulo, $municipio, $fecha, $hora, $descripcion, $costo, $categoria, $anunciar, $fileDestinationRoot);
            }else{
            }

        } else {
            // Esta con algo
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
                    $fileDestinationRoot = 'upload/fotosEventos/'.$fileNameNew;
                    if (strlen($titulo) > 0 && strlen($municipio) > 0 && strlen($costo) > 0 && strlen($fecha) > 0 && strlen($descripcion) > 0 && strlen($categoria) > 0 && strlen($anunciar) > 0) {
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $consultas = new consultasAdmin();
                        $result = $consultas->modificarEventoAdmin($id, $email, $titulo, $municipio, $fecha, $hora, $descripcion, $costo, $categoria, $anunciar, $fileDestinationRoot);
                    }else{
                    }
                }else{
                    echo 'El archivo es muy grande';
                }
            }else{
                echo 'No se permiten este tipo de archivos';
            }
        }

    }



?>
