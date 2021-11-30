<?php

    function cargar(){
        $consultas = new ConsultasUsuario();
        $filas = $consultas->cargarEventos();
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
    }

    function cargarHomeIndex(){
        $consultas = new ConsultasUsuario();
        $filas = $consultas->cargarEventos();
        foreach ($filas as $fila){
        $funChargeJS = "redireccionarC('views/client-site/detalleEvento.php?id=".$fila['id-evento']."')";
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
    }

    function cargarModificarAdmin(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $consultas = new consultasAdmin();
            $filas = $consultas->cargarEventoA($id);
            foreach ($filas as $fila){
                echo "
                <form action='../../controller/modificarEvento.php' method='POST' class='form-containerr row'
                enctype='multipart/form-data'>
                <input type='text' name='id' class='d-none'  value='".$fila['id-evento']."'>
                <input type='text' name='email' class='d-none'  value='".$fila['emailUser']."'>
                <input type='text' name='imageEventBefore' class='d-none'  value='".$fila['imagenEvento']."'>

                <div class='row col-md-6'>
                <div class='img-thumbnail imgCreateEvent'>
                    <img class='imgCreate' src='"."../../".$fila['imagenEvento']."' alt='Imagen evento' id='blah'>
                </div>
                    <div class='c-upload-btn-wrapper'>
                    <p>La imagen debe tener proporcion cuadrada para mejor visualizacion*</p>
                    <button class='btn btn-transparent-md c-btn'>Click <span>aquí</span> para subir una imagen</button>
                    <input type='file' name='imageEvent' id='imgInp' accept='.jpg, .png, .gif, .jpeg'
                    name='foto'>
                    </div>
                </div>
                <div class='row col-md-6'>
                <div class='col-md-12'>
                    <input type='text' class='form-control main' name='titulo' id='titulo' placeholder='Titulo' value='".$fila['titulo']."'>
                </div>
                <div class='col-md-6'>
                    <input list='municipios' class='form-control main' name='municipio' id='municipio' placeholder='Municipio' value='".$fila['municipio']."'>
                    <datalist id='municipios' placeholder='Chia, Cajica, Zipaquira'>
                    <option value='Bogota'></option>
                    <option value='Cajica'></option>
                    <option value='Chia'></option>
                    <option value='Cogua'></option>
                    <option value='Cota'></option>
                    <option value='Gachancipa'></option>
                    <option value='Nemocon'></option>
                    <option value='Sopo'></option>
                    <option value='Tabio'></option>
                    <option value='Tenjo'></option>
                    <option value='Tocancipa'></option>
                    <option value='Zipaquira'></option>
                    </datalist>
                </div>
                <div class='col-md-6'>
                    <input type='number' class='form-control main' name='costo' id='costo'
                    placeholder='Costo en pesos colombianos' value='".$fila['costo']."'>
                </div>
                <div class='col-md-6'>
                    <input type='date' class='form-control main' name='fecha' id='fecha' placeholder='Fecha' value='".$fila['fecha']."'>
                </div>
                <div class='col-md-6'>
                    <input type='time' class='form-control main' name='hora' id='hora' placeholder='Hora' value='".$fila['hora']."'>
                </div>
                <div class='col-md-6'>
                    <input list='categorias' class='form-control main' name='categoria' id='categoria' placeholder='Categoria' value='".$fila['categoria']."'>
                    <datalist id='categorias' placeholder='Selecciona una categoria'>
                    <option value='Arquitectura'></option>
                    <option value='Cine'></option>
                    <option value='Comedia'></option>
                    <option value='Danza'></option>
                    <option value='Deportes'></option>
                    <option value='Dibujo'></option>
                    <option value='Escultura'></option>
                    <option value='Graficos'></option>
                    <option value='Literatura'></option>
                    <option value='Musica'></option>
                    <option value='Teatro'></option>
                    </datalist>
                </div>
                <div class='col-md-6'>
                    <div class='form-group'>
                    <select class='form-control main' name='anunciar' id='anunciar' required>
                        <option value='' disabled selected>¿Anunciar?</option>
                        <option value='Si'>Si</option>
                        <option value='No'>No</option>
                    </select>
                    </div>
                </div>
                <div class='col-md-12'>
                    <textarea name='descripcion' id='descripcion' class='form-control main' rows='10'
                    placeholder='Descripcion de lo que va haber en el evento'>".$fila['descripcion']."</textarea>
                </div>
                <div class='col-12 text-center'>
                    <button type='submit' name='submit' class='btn btn-main-md'>Agregar Evento</button>
                </div>
                </div>
                </form>";        
            }
        }
        
    }

    function cargarCategorias(){
        $consultas = new ConsultasUsuario();
        $filas = $consultas->cargarEventosCategoria();
        foreach ($filas as $fila){
            
        echo "					
            <div class='gallery-item mix ".$fila['categoria']."'>
                <div class='container cards''>
                        
                        <div class='front' style='background-image: url(../../".$fila['imagenEvento'].")'>
                            <div class='titulos-cards'>
                                <p>".$fila['titulo']."</p>
                                <span>".$fila['categoria']."</span>
                            </div>
                        </div>
                        <div class='back'>
                            <div class='titulos-cards'>
                            <p class='pback'>".$fila['descripcion']."</p>
                            </div>
                        </div>
                            
                </div>
            </div>
            ";
        }
    }
?>