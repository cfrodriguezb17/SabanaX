<?php
    session_start();

    if (!isset($_SESSION['autenticado'])) {
        echo '<script>alert("POR FAVOR INICIE SESIÓN")</script>';
        echo "<script>location.href='../extras/login.php'</script>";
    }
    if ($_SESSION['rol']!="Cliente") {
        echo '<script>alert("NO POSEE LOS PERMISOS PARA ESTAR EN ESTA INTERFAZ")</script>';
        echo "<script>location.href='../extras/login.php'</script>";
    }
?>