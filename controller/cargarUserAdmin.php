<?php

    function cargarUser(){

        if (isset($_GET['id_modificar'])) {
            
            $objetoConsulta = new consultasAdmin();
            $id_modificar = $_GET['id_modificar'];
            $result = $objetoConsulta->listarUser($id_modificar);

            foreach ($result as $f) {
                echo '
                    <form class="w-100 size-form" action="../../controller/actualizarUserAdmin.php" method="POST">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Identificación</label>
                                <input type="number" name="identificacion" value="'.$f["identificacion"].'" class="form-control" id="exampleInputEmail1" placeholder="Ej: 1077092435">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">TIPO DE DOCUMENTO</label>
                                <select name="tipodoc"  class="form-control"required id="exampleFormControlSelect1">
                                <option value="'.$f["tipodoc"].'"">'.$f["tipodoc"].'</option>
                                <option value="C.C">C.C</option>
                                <option value="T.I">T.I</option>
                                <option value="C.E">C.E</option>
                                <option value="PASAPORTE">PASAPORTE</option>
                                </select>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">NOMBRES</label>
                                <input type="text" name="nombres" value="'.$f["nombres"].'" required class="form-control" placeholder="Ej: DUVAN FELIPE">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">APELLIDOS</label>
                                <input type="text" name="apellidos" value="'.$f["apellidos"].'" required class="form-control" placeholder="Ej: AVILA MARTINEZ">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">EMAIL</label>
                                <input type="email" name="email" value="'.$f["email"].'" class="form-control" required id="exampleInputEmail1" placeholder="Ej: usuario@gmail.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">TELÉFONO</label>
                                <input type="number" name="telefono" value="'.$f["telefono"].'" required class="form-control" placeholder="Ej: 3045384271">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">CLAVE</label>
                                <input type="texto" name="clave" value="'.$f["clave"].'" required class="form-control" placeholder="Ej: 12345">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">ROL</label>
                                <select name="rol"  class="form-control"required id="exampleFormControlSelect1">
                                <option value="'.$f["rol"].'"">'.$f["rol"].'</option>
                                <option value="Admin">Administrador</option>
                                <option value="Artista">Artista</option>
                                <option value="Cliente">Cliente</option>  
                                </select>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">ESTADO</label>
                                <select name="estado"  class="form-control"required id="exampleFormControlSelect1">
                                <option value="'.$f["estado"].'"">'.$f["estado"].'</option>
                                <option value="activo">Activo</option>
                                <option value="inactivo">Inactivo</option>
                                </select>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <button class="btn btn-primary" type="submit"> ACTUALIZAR USUARIO </button>
                            </div>
                        
                        
                        </div>
                    </form>
                ';
            }
        }
    }

?>