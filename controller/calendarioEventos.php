<?php 
function cargarEventoCalendario(){
	$consultas = new ConsultasUsuario();
    $eventos = $consultas->cargarEventosCalendario();
    
    $jsonBasic = "[";
    foreach ($eventos as $evento){
	    $jsonBasic = $jsonBasic . "
	    { 
	      id: '".$evento['id-evento']."',
	      title: '".$evento['titulo']."', 
	      start: '".$evento['fecha']."T".$evento['hora']."', 
	      url: 'detalleEvento.php?id=".$evento['id-evento']."',
	    },
	    ";
    }
    $jsonBasic = $jsonBasic . "]";
    echo $jsonBasic;
}
?>