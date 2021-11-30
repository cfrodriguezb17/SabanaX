<?php 
	require_once("../../../model/conexion.php");
	require_once("../../../model/consultasUsuario.php");
	$consultas = new ConsultasUsuario();
	$eventos = $consultas->cargarEventosCalendario();

	foreach ($eventos as $evento) {
    $events[] = [
        'id' => $evento['id-evento'],
        'title' => $evento['titulo'],
        'start' => $evento['fecha']."T".$evento['hora'],
        'url' => "detalleEvento.php?id=".$evento['id-evento'],
    ];
    }
    echo json_encode($events);
?>