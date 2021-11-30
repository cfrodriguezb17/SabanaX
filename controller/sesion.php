<?php
// CONECTAMOS CON LA BASE DE DATOS
    require_once("../model/conexion.php");
    require_once("../model/validarSesion.php");


    $email = $_POST['email'];
    // 
    $clave = md5($_POST['clave']);


    $objetoSesion = new validarSesion();
    $result = $objetoSesion->iniciarSesion($email, $clave);

    

?>