<?php

    function cargarPqrs(){
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
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
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
                <td><a class="btn btn-success" href="modificarPqrs.php?id_modificar='.$f["idPqr"].'">EDITAR</a></td>
                <td><a class="btn btn-danger" href="../../controller/eliminarPqr.php?idPqr='.$f["idPqr"].'">ELIMINAR</a></td>
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