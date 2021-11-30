<?php
      
    
    
    function cargarPqr(){
        if (isset($_GET['id_modificar'])) {

            $objetoConsultas = new consultasAdmin();
            $id_modificar = $_GET['id_modificar'];
            $result = $objetoConsultas->listarPqr($id_modificar);
            
            foreach ($result as $f) {
                echo '
                <form class="w-100 size-form" action="../../controller/actualizarPqr.php" method="POST" >
                    <div class="row">
                      <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">ID PQR</label>
                      <input type="number" name="idPqr" readonly value="'.$f["idPqr"].'" class="form-control" id="exampleInputEmail1" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">IDENTIFICACIÓN</label>
                        <input type="number" name="identificacion" readonly value="'.$f["identificacion"].'" class="form-control" id="exampleInputEmail1" placeholder="Escribe por favor tu número de cédula, sin puntos">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">TIPO DE PQR</label>
                        <select name="tipoPqr"  class="form-control"required id="exampleFormControlSelect1">
                          <option value="'.$f["tipoPqr"].'">'.$f["tipoPqr"].'</option>
                          <option value="Fallas">Fallas en el sistema</option>
                          <option value="Dudas">Dudas sobre un tema</option>
                        </select>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">DESCRIPCIÓN</label>
                        <input type="text" name="descripcion" value="'.$f["descripcion"].'" required class="form-control" placeholder="Ej: No me permite modificar mi perfil">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">ESTADO</label>
                        <select name="estado"  class="form-control"required id="exampleFormControlSelect1">
                          <option value="'.$f["estado"].'">'.$f["estado"].'</option>
                          <option value="Por verificar">Por verificar</option>
                          <option value="Resuelto">Resuelto</option>
                        </select>
                        
                      </div>


                       <div class="form-group col-md-6">
                        <button class="btn btn-primary" type="submit"> ACTUALIZAR PQR </button>
                      </div>
                      
                      
                    </div>
                  </form>

                ';

            }
            
        }
    }


?>