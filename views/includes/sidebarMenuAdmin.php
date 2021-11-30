<?php
  require_once("../../model/conexion.php");
  require_once("../../model/consultasAdmin.php");
  require_once("../../model/seguridadAdmin.php");
  require_once("../../controller/verPerfil.php");

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="homeAdmin.php" class="brand-link">
      <img src="../assets/dist/img/logo-circle.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sabana X</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <?php
        perfil();
      ?>
      


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
            <i class="fas fa-users"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="verUsuarios.php"class="nav-link">
                    <i class="fas fa-eye"></i>
                        <p>Ver</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="registrarUsuarios.php" class="nav-link">
                <i class="fas fa-edit"></i>
                  <p>Registrar</p>
                </a>
              </li>
              
            </ul>
          </li>

           <!--Eventos barra lateral-->
           <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-calendar-day"></i>
              <p>
                Eventos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="verEventos.php" class="nav-link">
                  <i class="fas fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
                   
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-hard-hat"></i>
              <p>
                PQRS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="verPqrs.php" class="nav-link">
                  <i class="fas fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
              
<!--          <li class="nav-item">
                <a href="registrarPqrs.php" class="nav-link">
                  <i class="fas fa-edit"></i>
                  <p>Registrar</p>
                </a>
              </li> -->
              
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="../../controller/cerrarSesion.php" class="nav-link">
                    <ilass="fas fa-power-off"></i>
                  <p>Cerrar Sesión</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- <li class="nav-header">EXAMPLES</li> -->
          
            
        </ul>
      </nav>

      

     
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>