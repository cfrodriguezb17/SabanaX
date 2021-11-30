<?php
    require_once('../model/conexion.php');
    require_once('../model/validarSesion.php');


    $objetoConsulta = new validarSesion();
    $resultado = $objetoConsulta -> cerrarSesion();
?>