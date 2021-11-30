<?php
// CONECTAMOS CON LA BASE DE DATOS
    require_once("../model/conexion.php");
    require_once("../model/consultasE.php");

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
    $estado="Activo";
    if ($_POST['nickname'] == '') {
        $nickname='';
    } else {
        $nickname=$_POST['nickname'];
    }
    $foto='../upload/fotos/defaultProfile.jpg';
    $profesion = 'Sin profesion';
    $bio = 'Sin biografia';


    // VALIDAMOS QUE NO ESTE VACIA NINGUNA VARIABLE
    if (strlen($identificacion) > 0 && strlen($tipodoc) > 0 && strlen($nombres) > 0 && strlen($apellidos) > 0 && strlen($email) > 0 && strlen($telefono) > 0 && strlen($clave) > 0 && strlen($rol) > 0 && strlen($estado) > 0) {
        // AQUI ES CUANDO SE CUMPLE EL IF
        // MD ES PARA ENCRIPTAR LA CLAVE
        $clavemd=md5($clave);
        // CREAMOS UN OBJETO DE LA CLASE GLOBAL DEL ARCHIVO CONSULTAS EN EL MODELO
        $objetoConsultas = new consultasE();
        // LLAMAMOS LA FUNCION PERTENECIENTE AL PROCESO A REALIZAR 
        // PARA ENVIAR LOS ARGUMENTOS O VALORES PARA EL INSERT
        $result = $objetoConsultas->registraUserE($identificacion, $tipodoc, $nombres, $apellidos, $email, $telefono, $clavemd, $rol, $estado, $foto, $nickname, $profesion, $bio);


    }else {
        // SI ESTA VACIA ALGUNA VARIABLE
        echo '<script>alert("POR FAVOR REGISTRE TODOS LOS DATOS")</script>';
        // echo "<script>location.href='../views/extras/register.php'</script>";
    }


?>