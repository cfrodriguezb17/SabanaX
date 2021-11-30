<?php

    function modificarPqrs(){
        // CREAMOS EL OBJETO CONSULTAS ADMINISTRADOR
        $objetoConsultas = new consultasAdmin();
        $result = $objetoConsultas->modificarPqrs();

        if (!isset($result)) {
            echo '<h2>No hay datos</h2>';
        }else {
            echo '
            <thead>
            <tr>
              <th>ID PQR</th>
              <th>Identificación Usuario</th>
              <th>Tipo PQR(s)</th>
              <th>Descripción</th>
              <th>Estado</th>
              <th>Editar</th>
              <th>Deshabilitar</th>
            </tr>
            </thead>

            
            
            
            ';
            foreach ($result as $f) {
                echo '<tr>
                <td>'.$f['idPqr'].'</td>
                <td>'.$f['identificacion'].'</td>
                <td>'.$f['tipoPqr'].'</td>
                <td>'.$f['descripcion'].'</td>
                <td>'.$f['estado'].'</td>
                <td><a href='.'controller/modificar.php?identificacion='.$f['identificacion'].'>Editar</td>
                <td><a href='.'controller/eliminar.php?identificacion='.$f['identificacion'].'>Deshabilitar</td>
                
              </tr>';
            }
            echo '</tbody>';
        }
    }

?>