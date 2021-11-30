<?php

    function cargarPqrsUsuario(){
        // CREAMOS EL OBJETO CONSULTAS ADMINISTRADOR
        $objetoConsultas = new consultasAdmin();
        $result = $objetoConsultas->listarPqrs();

        if (!isset($result)) {
            echo '<h2>No hay PQRS registradas</h2>';
        }else {
            echo '
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID PQR</th>
                    <th>ID USUARIO</th>
                    <th>TIPO DE PQR</th>
                    <th>DESCRIPCIÓN</th>
                    <th>ESTADO</th>
                    
                  </tr>
                  </thead>
                  <tbody>                     
                  
            ';
            
            foreach ($result as $f) {
                echo '
                <tr>
                <td>'.$f["idPqr"].'</td>
                <td>'.$f["identificacion"].'</td>
                <td>'.$f["tipoPqr"].'</td>
                <td>'.$f["descripcion"].'</td>
                <td>'.$f["estado"].'</td>
                
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