<?php
    function perfilArtista(){

        $email = $_SESSION['email'];
        $objetoConsulta = new consultasAdmin();

        $resultado = $objetoConsulta-> imgCliente($email);

        foreach ($resultado as $f) {
            echo '
                <section class="section single-speaker">
                    <div class="container">
                        <div class="block">
                            <div class="row mt-4">
                                <div class="col-lg-5 col-md-6 align-self-md-center">
                                    <div class="image-block">
                                        <img src="../'.$f['foto'].'" class="img-fluid" alt="speaker">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 align-self-center">
                                    <div class="content-block">
                                        <div class="name">
                                            <h3>'.$f['nickname'].'</h3>
                                        </div>
                                        <div class="profession">
                                            <p>'.$f['profesion'].'</p>
                                        </div>
                                        <div class="details">
                                        <h5>Informacion Personal</h5>
                                            <p>'.$f['bio'].'</p>
                                        </div>
                                        <div class="social-profiles">
                                            <h5>Redes Sociales</h5>
                                            <ul class="list-inline social-list">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
<div class="mt-2"></div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Editar Perfil
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../../controller/actualizarArtista.php" id="formulario-modal" method="POST" enctype="multipart/form-data">
            <input type="text" name="identificacion" class="d-none"  value="'.$_SESSION["id"].'">
            <input type="text" name="fotoAntes" class="d-none"  value="'.$f["foto"].'">
           <div class="row">
            <div class="col-4">
              <img src="../'.$f['foto'].'" id="blah" class="img-thumbnail mb-2" alt="...">
              <div class="contenedor-input-image">
                  <input id="imgInp" type="file" accept=".jpg, .png, .gif, .jpeg" name="foto">
                  <label for="imgInp">
                    Selecciona una Imagen
                  </label>
              </div>
            </div>
            <div class="col-8">
              <div class="form-group">
                <label for="exampleInputEmail1">NickName</label>
                <input name="nickname" type="text" class="form-control" id="exampleInputEmail1" value="'.$f['nickname'].'">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Profesion</label>
                <input name="profesion" type="text" class="form-control" id="exampleInputEmail1" value="'.$f['profesion'].'">
              </div>
              <div class="form-group form-check">
                <label for="exampleInputEmail1">Informacion Personal</label>
                <textarea name="bio" class="form-control" id="exampleFormControlTextarea1" rows="5">'.$f['bio'].'</textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button  type="submit" form="formulario-modal" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
                        </div>
                    </div>
                </section>              
            ';
        }
    }

?>