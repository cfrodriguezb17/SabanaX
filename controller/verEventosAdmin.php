<?php

    function cargarEventos(){
        // CREAMOS EL OBJETO CONSULTAS ADMINISTRADOR
        $objetoConsultas = new consultasAdmin();
        $result = $objetoConsultas->listarEventos();

        if (!isset($result)) {
            echo '<h2>No hay datos</h2>';
        }else {
            echo '
                <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                
                <th>EMAIL USUARIO</th>
                <th>ID EVENTO</th>
                <th>TITULO</th>
                <th>MUNICIPIO</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>DESCRIPTION</th>
                <th>COSTO</th>
                <th>CATEGORIA</th>
                <th>ANUNCIAR</th>
                <th>IMAGEN EVENTO</th>
                
                <th>VER/EDITAR</th>
                <th>ELIMINAR</th>
                </tr>
                </thead>
                <tbody>
                
                
                
            ';
            foreach ($result as $f) {
                echo '
                    <tr> 
                        <td>'.$f["emailUser"].'</td>
                        <td>'.$f["id-evento"].'</td>
                        <td>'.$f["titulo"].'</td>
                        <td>'.$f["municipio"].'</td>
                        <td>'.$f["fecha"].'</td>
                        <td>'.$f["hora"].'</td>
                        <td>'.$f["descripcion"].'</td>
                        <td>'.$f["costo"].'</td>
                        <td>'.$f["categoria"].'</td>
                        <td>'.$f["anunciar"].'</td>
                        <td>'.$f["imagenEvento"].'</td>
                        
                        <td><a class="btn btn-success" href ="modificarEvento.php?id='.$f["id-evento"].'">EDITAR</a></td>
                        
                        <td><a class="btn btn-danger" href="../../controller/eliminarEvento.php?id='.$f["id-evento"].'">Eliminar</a></td>
                    </tr>
                ';
            }
            echo '
                </tbody>
                    
                </table>
            ';
        }
    }

?>