<div class="d-flex toggled" id="wrapper">
    <!-- Sidebar -->
    <div class="color-menu border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><a href="index.php?acc=inicioConsultor"><img src="recursos/imagenes/Logo_GNIUS3.png" alt="" height="150" width="170"></a> </div>
      <div class="list-group list-group-flush">
        <?php
          if(isset($_SESSION['vsUsuarioId']))
          {
            echo '<a href="index.php?acc=vPerfilUsuario" class="list-group-item list-group-item-action font-weight-bold font-italic"><i class="fas fa-user fa-lg pr-1"></i>  '.$_SESSION['vsMensaje'].'</a>';
          }
          if(!isset($_SESSION['vsUsuarioId']))
          {
            echo '<a href="index.php?acc=inicioConsultor" class="list-group-item list-group-item-action color-menu"><i class="fas fa-home fa-lg pr-1"></i> Inicio</a>';

            echo '<a href="index.php?acc=vlogin" class="list-group-item list-group-item-action color-menu"><i class="fas fa-user fa-lg pr-1"></i> Iniciar Sesion</a>';

            echo '<a href="index.php?acc=vMisionVision" class="list-group-item list-group-item-action color-menu"><i class="fas fa-address-book fa-lg pr-1"></i> Mision y Vision</a>';

            echo '<a href="index.php?acc=vContacto" class="list-group-item list-group-item-action color-menu"><i class="fas fa-map-marker-alt fa-lg pr-1"></i> Contacto</a>';
          }
          while($filamenu=$resultado->fetch_array())
            {
              echo '<a href="'.$filamenu['url_archivo'].'" class="list-group-item list-group-item-action color-menu"><i class="fas fa-chevron-circle-right"></i> '.$filamenu['nombre_opcion'].'</a>';
            }
        ?>
        <!--<a href="Cerrar_Session.php" class="list-group-item list-group-item-action color-menu"><i class="fas fa-chevron-circle-right"></i>   Cerrar Sesion</a>
      --></div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light color-barra border-bottom">
        <button class="color-barra btn" id="menu-toggle"><i class="fas fa-bars fa-2x"></i></button>


        <div class="collapse navbar-collapse container" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0 col-sm-12">
            <li class="nav-item col-sm-12">
              <div class="text-center">
                <a href="#" class=""><img src="recursos/imagenes/utec_brand.png" alt="" class="logo"></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>