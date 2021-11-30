<?php
// CONECTAMOS CON LA BASE DE DATOS
    require_once("../model/conexion.php");
    require_once("../model/consultasAdmin.php");





// ATERRRIZAMOS EN VARIABLES LOS VALORES ENVIADOS EN EL ATRIBUTO NAME
// POR MEDIO DEL METODO POST
    $identificacion=$_POST['identificacion'];
    $tipodoc=$_POST['tipodoc'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $clave=$_POST['clave'];
    $rol=$_POST['rol'];
    $estado=$_POST['estado'];





    // DEFINIR UN PESO LIMITE DE LAS IMAGENES O FOTOS Y VALIDAMOS QUE EL FORMATO SEA EL CORRECTO

    define('LIMITE', 2000);
    define('ARREGLO', serialize(array('image/jpg', 'image/png', 'image/gif', 'image/jpeg')));
    $PERMITIDOS = unserialize(ARREGLO);

    // VALIDAMOS EL ARCHIVO O LA FOTO QUE NO VENGAN VACIOS O TENGAN ALGUN TIPO DE ERROR
    if ($_FILES ['foto'] ["error"] > 0 ) {
        echo '<script>alert("POR FAVOR SELECCIONE OTRA IMAGEN")</script>';
        echo "<script>location.href='../views/admin/registrarUsuarios.php'</script>";
    }else{
        // CONFIRMAMOS TIPO DE IMAGEN Y TAMAÑO PESO
        if (in_array($_FILES['foto']['type'], $PERMITIDOS) && $_FILES['foto']['size'] <=LIMITE * 1024) {
            
            // VAMOS A CAPTURAR LOS VALORES A GUARDAR EN LA BASE DE DATOS
            // Y GENERAMOS LA RUTA DONDE QUEDARAN LAS FOTOS
            $foto = "../upload/fotos/".$_FILES['foto']['name'];
            

            if (!file_exists($foto)) {
                // MOVEMOS EL ARCHIVO A LA CARPETA UPLOAD
                $resultado = move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);
                
                if ($resultado AND strlen($identificacion) > 0 && strlen($tipodoc) > 0 && strlen($nombres) > 0 && strlen($apellidos) > 0 && strlen($email) > 0 && strlen($telefono) > 0 && strlen($clave) > 0 && strlen($rol) > 0 && strlen($estado) > 0) {
                   $clavemd = md5($clave);  
                    // CREAMOS UN OBJETO DE LA CLASE GLOBAL DEL ARCHIVO CONSULTAS EN EL MODELO 
                   $objetoConsultasA =  new consultasAdmin();
                    // DEFINIMOS A CUAL FUNCION LE VAMOS A ENVIAR LOS DATOS O ARGUMENTOS DE TODAS LAS FUNCIONES QUE PUEDE TENER LA CLASE GLOBAR CONSULTAS
                   $result = $objetoConsultasA->insertarUser($identificacion, $tipodoc, $nombres, $apellidos, $email, $telefono, $clavemd, $rol, $estado, $foto);
                }else {
                    echo '<script>alert("POR FAVOR LLENE TODOS LOS CAMPOS REQUERIDOS DEL FORMULARIO")</script>';
                    echo "<script>location.href='../views/admin/registrarUsuarios.php'</script>";
                }
            }else{
                echo '<script>alert("ERROR EN EL ARCHIVO")</script>';
                echo "<script>location.href='../views/admin/registrarUsuarios.php'</script>";
            }
        }else{
            echo '<script>alert("POR FAVOR SELECCIONE OTRA IMAGEN CAMBIANDO EL FORMATO A JPG O VERIFIQUE EL PESO")</script>';
            echo "<script>location.href='../views/admin/registrarUsuarios.php'</script>";
            

        }
    }

?>