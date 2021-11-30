<?php
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

    if (strlen($identificacion) > 0 && strlen($tipodoc) > 0 && strlen($nombres) > 0 && strlen($apellidos) > 0 && strlen($email) > 0 && strlen($telefono) > 0 && strlen($clave) > 0 && strlen($rol) > 0 && strlen($estado) > 0) {
        
        $objetoConsultas = new consultasAdmin();
        $result = $objetoConsultas->actualizarUser($identificacion, $tipodoc, $nombres, $apellidos, $email, $telefono, $clave, $rol, $estado);


    }else {
        echo '<script>alert("POR FAVOR LLENE TODOS LOS CAMPOS")</script>';
        echo "<script>location.href='../views/admin/registrarUsuarios.php'</script>";
    }


?>