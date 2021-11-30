<?php

require_once("../model/conexion.php");
require_once("../model/consultasAdmin.php");

    if (isset($_GET['identificacion'])) {
        $identificacion = $_GET['identificacion'];
        $consultas = new consultasAdmin(); 
        $mensaje = $consultas->eliminarUser($identificacion);
        echo $mensaje;
        // echo "<div><a href='../views/admin/gestionUsuarios/verUsuarios.php'>Volver a mis productos</a></div>";
    }
    


?>