<?php
// CONECTAMOS CON LA BASE DE DATOS
    require_once("../model/conexion.php");
    require_once("../model/consultasAdmin.php");


// ATERRRIZAMOS EN VARIABLES LOS VALORES ENVIADOS EN EL ATRIBUTO NAME
// POR MEDIO DEL METODO POST
    
    $identificacion=$_POST['identificacion'];
    $tipoPqr=$_POST['tipoPqr'];
    $descripcion=$_POST['descripcion'];
    $estado="Por verificar";


    // VALIDAMOS QUE NO ESTE VACIA NINGUNA VARIABLE
    if (strlen($identificacion) > 0 && strlen($tipoPqr) > 0 && strlen($descripcion) > 0 && strlen($estado) > 0) {
        // AQUI ES CUANDO SE CUMPLE EL IF
        // MD ES PARA ENCRIPTAR LA CLAVE
        //$clavemd=md5($clave);
        // CREAMOS UN OBJETO DE LA CLASE GLOBAL DEL ARCHIVO CONSULTAS EN EL MODELO
        $objetoConsultas = new consultasAdmin();
        // LLAMAMOS LA FUNCION PERTENECIENTE AL PROCESO A REALIZAR 
        // PARA ENVIAR LOS ARGUMENTOS O VALORES PARA EL INSERT
        $result = $objetoConsultas->insertarPqrs($identificacion, $tipoPqr, $descripcion, $estado);


    }else {
        // SI ESTA VACIA ALGUNA VARIABLE
        echo '<script>alert("POR FAVOR DILIGENCIE TODOS LOS CAMPOS")</script>';
        // echo "<script>location.href='../views/extras/register.php'</script>";
    }


?>