<?php
require_once("../model/conexion.php");
require_once("../model/consultasAdmin.php");

    if (isset($_GET['id'])) {
        $identificacion = $_GET['id'];
        $consultas = new consultasAdmin(); 
        $mensaje = $consultas->eliminarEvento($identificacion);
        echo $mensaje;
    }
?>