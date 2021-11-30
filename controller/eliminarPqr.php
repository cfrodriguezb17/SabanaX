<?php
    // CONECTAMOS CON LA BASE DE DATOS
    require_once("../model/conexion.php");
    require_once("../model/consultasAdmin.php");

    if(isset($_GET['idPqr'])){
        $idPqr = $_GET['idPqr'];
        $objetoConsultas = new consultasAdmin();
        $result = $objetoConsultas->eliminarPqr($idPqr);
        
        echo '<script>alert("HA ELIMINADO CON ÉXITO LA PQR")</script>';
        echo "<script>location.href='../views/admin/verPqrs.php'</script>";


    }else{

    }

 

?>