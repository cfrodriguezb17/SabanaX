<?php 
	require_once("../model/conexion.php");
	require_once("../model/consultasUsuario.php");

	$identificacion = $_POST['identificacion'];
	$nickname = $_POST['nickname'];
	$profesion = $_POST['profesion'];
	$bio = $_POST['bio'];
	$fotoAntes = $_POST['fotoAntes'];
	$fileSize = $_FILES['foto']['size'];

	$message = null;

	if ($fileSize == 0) {
		if (strlen($identificacion) > 0 && strlen($nickname) > 0 && strlen($profesion) > 0 && strlen($bio) > 0) {
	        $consultas = new ConsultasUsuario();
	        $message = $consultas->modificarArtista($identificacion, $nickname, $profesion, $bio, $fotoAntes);
	        header("Location: ../views/artista/perfilArtista.php");
	    }else{
	        echo "Por favor completa los campos";
	    }
	} else {
		if (strlen($identificacion) > 0 && strlen($nickname) > 0 && strlen($profesion) > 0 && strlen($bio) > 0) {
			$file = $_FILES['foto'];
            $fileName = $_FILES['foto']['name'];
            $fileTmpName = $_FILES['foto']['tmp_name'];
            $fileType = $_FILES['foto']['type'];
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png', 'gif');

            if (in_array($fileActualExt, $allowed)) {
                if ($fileSize < 1024000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = '../upload/fotos/'.$fileNameNew; 
                    $fileDestinationRoot = 'upload/fotos/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
			        $consultas = new ConsultasUsuario();
			        $message = $consultas->modificarArtista($identificacion, $nickname, $profesion, $bio, $fileDestination);
			        header("Location: ../views/artista/perfilArtista.php");
                }else{
                    echo 'El archivo es muy grande';
                }
            }else{
                echo 'No se permiten este tipo de archivos';
            }
	    }else{
	        echo "Por favor completa los campos";
	    }
	}
	
?>