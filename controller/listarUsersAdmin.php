<?php

    function cargarUsers(){
        // CREAMOS EL OBJETO CONSULTAS ADMINISTRADOR
        $objetoConsultas = new consultasAdmin();
        $result = $objetoConsultas->listarUsers();

        if (!isset($result)) {
            echo '<h2>No hay datos</h2>';
        }else {
            echo '
                <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                
                <th>IDENTIFICACIÓN</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>TELEFONO</th>
                <th>EMAIL</th>
                <th>ROL</th>
                <th>ESTADO</th>
                <th>VER/EDITAR</th>
                <th>ELIMINAR</th>
                </tr>
                </thead>
                <tbody>
                
                
                
            ';
            foreach ($result as $f) {
                echo '
                    <tr class = "'.$f["estado"].'">
                        
                        <td>'.$f["identificacion"].'</td>
                        <td>'.$f["nombres"].'</td>
                        <td>'.$f["apellidos"].'</td>
                        <td>'.$f["telefono"].'</td>
                        <td>'.$f["email"].'</td>
                        <td>'.$f["rol"].'</td>
                        <td>'.$f["estado"].'</td>
                        <td><a class="btn btn-success" href ="modificarUser.php?id_modificar='.$f["identificacion"].'">VER/EDITAR</a></td>
                        
                        <td><a class="btn btn-danger" href="../../controller/eliminarUser.php?identificacion='.$f["identificacion"].'">Eliminar</a></td>
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