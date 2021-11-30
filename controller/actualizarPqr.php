<?php
    // CONECTAMOS CON LA BASE DE DATOS
    require_once("../model/conexion.php");
    require_once("../model/consultasAdmin.php");


// ATERRRIZAMOS EN VARIABLES LOS VALORES ENVIADOS EN EL ATRIBUTO NAME
// POR MEDIO DEL METODO POST
    $idPqr=$_POST['idPqr'];
    $identificacion=$_POST['identificacion'];
    $tipoPqr=$_POST['tipoPqr'];
    $descripcion=$_POST['descripcion'];
    $estado=$_POST['estado'];

    if (strlen($identificacion) > 0 && strlen($tipoPqr) > 0 && strlen($descripcion) > 0 && strlen($estado) > 0) {
    
        $objetoConsultas = new consultasAdmin();
        $result = $objetoConsultas->actualizarPqr($idPqr, $identificacion, $tipoPqr, $descripcion, $estado);
    }
    else{
        echo "Por favor";
    }

?>