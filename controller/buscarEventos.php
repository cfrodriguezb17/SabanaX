<?php
    require_once('../../model/conexion.php');
    require_once('../../model/consultasUsuario.php');

    function buscar(){

        $busqueda = $_GET['busqueda'];
        
        $consultas = new ConsultasUsuario();
        $filas = $consultas->buscarEventos($busqueda);

        if (isset($filas)) {
            foreach ($filas as $fila){
                $funChargeJS = "redireccionarC('detalleEvento.php?id=".$fila['id-evento']."')";
                echo "<div onclick=\"$funChargeJS\" class='col-cards' ontouchstart='this.classList.toggle('hover');'>";
                echo "      <div class='container cards'>
                                <div class='front' style='background-image: url(../../".$fila['imagenEvento'].")'>
                                    <div class='titulos-cards'>
                                        <p>".$fila['titulo']."</p>
                                            <span>".$fila['municipio']."</span>
                                    </div>
                                </div>
                                <div class='back'>
                                    <div class='titulos-cards'>
                                    <p class='pback'>".$fila['descripcion']."</p>
                                    </div>
                                </div>
                            </div>
                        </div>";
            }
        }else{
            echo "No hay resultados";
        }
    }


    /*function buscar($buscarQuery){
        $busqueda = $_GET['busqueda'];
        $consultas = new ConsultasUsuario();
        $filas = $consultas->buscarEventos($busqueda);
        if (isset($filas)) {
            foreach ($filas as $fila){
                foreach ($filas as $fila){
                $funChargeJS = "redireccionarC('detalleEvento.php?id=".$fila['id-evento']."')";
                echo "<div onclick=\"$funChargeJS\" class='col-cards' ontouchstart='this.classList.toggle('hover');'>";
                echo"           <div class='container cards'>
                                <div class='front' style='background-image: url(".$fila['imagenEvento'].")'>
                                    <div class='titulos-cards'>
                                        <p>".$fila['titulo']."</p>
                                            <span>".$fila['municipio']."</span>
                                    </div>
                                </div>
                                <div class='back'>
                                    <div class='titulos-cards'>
                                    <p class='pback'>".$fila['descripcion']."</p>
                                    </div>
                                </div>
                            </div>
                        </div>";
            }
        }else{
            echo "No hay resultados";
        }*/
    /*}*/
?>