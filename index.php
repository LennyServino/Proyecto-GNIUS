<?php
    session_start();
    if(isset($_GET['acc'])) 
    {
        $accion=$_GET['acc'];
    }
    else
    {
        $accion = "inicioConsultor";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G´nius</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
    <!-- Iconos Material+Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fuentes Google fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lora|Montserrat&display=swap" rel="stylesheet"> -->
    <!--Iconos Fontawesome-->
    <!-- <link rel="stylesheet" href="fontawesome/css/all.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!--Estilos Perzonalizados-->
    <link rel="stylesheet" href="recursos/css/simple-sidebar.css">
<!--     <link rel="stylesheet" href="recursos/css/estilos.css"> -->
    <link rel="stylesheet" href="recursos/css/estilos3.css">
</head>
<body class="body2">  
        <?php
            /* $rol = 1;  */
            if(isset($_GET['men'])) 
            {
                $rol=$_GET['men'];
            }
            else
            {
                $rol = "1";
            }      
            switch ($rol) {
                case '0':
                    require("vista/menuConsultor.php");
                    
                    break;
                
                case '1':
                    require("controlador/cMenu.php");
                    break;
                
                default:
                    # code...
                    break;
            }
        ?>
        <?php 
            switch ($accion) {
                case 'inicioConsultor':
                    $ac_inicio=1;
                    require("controlador/cInicioConsultor.php");
                    break;
                case 'vDetalleIdea':
                    $ac_inicio=2;
                    $codIdea=$_GET['id'];
                    require("controlador/cInicioConsultor.php");
                    break;
                case 'vContacto':
                    require('vista/vContacto.html');
                    break;
                case 'vMisionVision':
                    require('vista/vMisionVision.php');
                    break;
                case 'vlogin':
                    require("vista/vLogin.php");
                    break;
                //Validar Usuario del login
                case 'auten_log':
                    require("controlador/cLogin2.php");
                    break;
                case 'valPersona':
                    require("controlador/validarPersona.php");
                    break;    
                case 'vcontactenos':
                    require("vista/vcontactenos.html");
                    break;
                case 'vTipoEvento':
                    require("vista/vTipoEvento.html");
                    break;
                    case 'vCrearEvento':
                        $ac_event=1;
                        require("controlador/cEvento.php");
                        break;
                    case 'addEvent':
                        $ac_event=2;
                        require("controlador/cEvento.php");
                        break;
                    case 'vEventosTodos':
                        $ac_event=3;
                        require("controlador/cEvento.php");
                        break;
                    case 'buscarEvento':
                        $ac_event=4;
                        require("controlador/cEvento.php");
                        break;
                    case 'deleteEve':
                        $ac_event=5;
                        $id=$_GET['id'];
                        require("controlador/cEvento.php");
                        break;
                    case 'vModEstadoEvent':
                        $ac_event=6;
                        $id=$_GET['id'];
                        require("controlador/cEvento.php");
                        break;
                    case 'eventUpdated':
                        $ac_event=7;
                        require("controlador/cEvento.php");
                        break;
                    case 'vEquipoTecnologico';
                        $ac_tec=1;
                        require("controlador/cEquipoTec.php");
                        break;
                    case 'addEquiTec':
                        $ac_tec=2;
                        require("controlador/cEquipoTec.php");
                        break;
                    case 'vEquipoModif':
                        $ac_tec=3;
                        $id=$_GET['id'];
                        require("controlador/cEquipoTec.php");
                        break;
                    case 'equiUpdated':
                        $ac_tec=4;
                        require("controlador/cEquipoTec.php");
                        break;
                    case 'vOficinas';
                        $ac_ofi=1;
                        require("controlador/cOficinas.php");
                        break;
                    case 'addOficina':
                        $ac_ofi=2;
                        require("controlador/cOficinas.php");
                        break;
                    case 'vOficinaModif':
                        $ac_ofi=3;
                        $id=$_GET['id'];
                        require("controlador/cOficinas.php");
                        break;
                    case 'ofiUpdated':
                        $ac_ofi=4;
                        require("controlador/cOficinas.php");
                        break;
                    case 'vAsignarRoles':
                        $ac_rol=1;
                        require("controlador/cAsignarRol.php");
                        break;
                    case 'vModificarRol':
                        $ac_rol=2;
                        $id=$_GET['id'];
                        require('controlador/cAsignarRol.php');
                        break;
                    case 'rolUpdated':
                        $ac_rol=3;
                        require('controlador/cAsignarRol.php');
                        break;
                    case 'vAsignarMentores':
                        $ac_mentor=1;
                        require("controlador/cAsignarMentores.php");
                        break;
                    case 'addMentor':
                        $ac_mentor=2;
                        require("controlador/cAsignarMentores.php");
                        break;
                    case 'deleteMent':
                        $ac_mentor=3;
                        $id=$_GET['id'];
                        require("controlador/cAsignarMentores.php");
                        break;
                    case 'vIdeasMostrar':
                        $ac_mIdea=1;
                        require("controlador/cIdeasMostrar.php");
                        break;
                    case 'vModEstadoIdea':
                        $ac_mIdea=2;
                        $id=$_GET['id'];
                        require("controlador/cIdeasMostrar.php");
                        break;
                    case 'EstadoIdeaMod':
                        $ac_mIdea=3;
                        require("controlador/cIdeasMostrar.php");
                        break;
                    case 'vMostrarPrestamoTec':
                        $ac_prestaTec=1;
                        require("controlador/cMostrarPrestamosTec.php");
                        break;
                    case 'buscarPrestamo':
                        $ac_prestaTec=2;
                        require("controlador/cMostrarPrestamosTec.php");
                        break;
                    case 'vModEstadoPresta':
                        $ac_prestaTec=3;
                        $id=$_GET['id'];
                        $idPer=$_GET['idPer'];
                        require("controlador/cMostrarPrestamosTec.php");
                        break;
                    case 'presUpdated':
                        $ac_prestaTec=4;
                        require("controlador/cMostrarPrestamosTec.php");
                        break;
                    case 'vMostrarEquiProyect':
                        $ac_TeamPr=1;
                        require("controlador/cMostrarEquiposProyect.php");
                        break;
                    case 'buscarEquipo':
                        $ac_TeamPr=2;
                        require("controlador/cMostrarEquiposProyect.php");
                        break;
                    case 'vMostrarInsEvent':
                        $ac_InsEvent=1;
                        require("controlador/cMostrarInsEventos.php");
                        break;
                    case 'buscarEvento':
                        $ac_InsEvent=2;
                        require("controlador/cMostrarInsEventos.php");
                        break;
                    case 'vMostrarBitacoras':
                        $ac_mBitacoras=1;
                        require("controlador/cMostrarBitacoras.php");
                        break;
                    case 'buscarBitacora':
                        $ac_mBitacoras=2;
                        require("controlador/cMostrarBitacoras.php");
                        break;
                    case 'vDetalleBitacora2':
                        $ac_mBitacoras=3;
                        $cod=$_GET['cod'];
                        require("controlador/cMostrarBitacoras.php");
                        break;
                    //Avance 30/10/2020
                    case 'vMostrarUsoOfi':
                        $ac_usoOfi=1;
                        require("controlador/cMostrarUsoOficina.php");
                        break;
                    case 'vDetalleUso':
                        $ac_usoOfi=2;
                        $id=$_GET['id'];
                        require("controlador/cMostrarUsoOficina.php");
                        break;
                    case 'buscarUsoOfi':
                        $ac_usoOfi=3;
                        require("controlador/cMostrarUsoOficina.php");
                        break;
                    case 'vModEstadoUso':
                        $ac_usoOfi=4;
                        $id=$_GET['id'];
                        $idPer=$_GET['idPer'];
                        require("controlador/cMostrarUsoOficina.php");
                        break;
                    case 'usoUpdated':
                        $ac_usoOfi=5;
                        require("controlador/cMostrarUsoOficina.php");
                        break;
                    /*Estas opciones las hizo Emilio */
                    case 'vRegistrarse':
                        $ac_reg=1;
                        require("controlador/cRegistrarse.php");
                        break;
                    //Validar el registro en la BD
                    case 'auten_reg':
                        $ac_reg=2;
                        require("controlador/cRegistrarse.php");
                        break;
                    case 'vIngresarIdeaNegocio':
                        $ac_idea=1;
                        require("controlador/cIdeaNegocio.php");
                        break;
                    case 'insert_idea':
                        $ac_idea=2;
                        require("controlador/cIdeaNegocio.php");
                        break;
                    case 'datosPersonales':
                        require("vista/vIngresarEmprendedor.php");
                        break;
                    case 'insert_emp':
                        require("controlador/cIngresarEmprendedor.php");
                        break;
                    case 'vUsoOficina1':
                        $ac_usoOficina=1;
                        require("controlador/cUsoOficina1.php");
                        break;
                    case 'insert_uso':
                        $ac_usoOficina=2;
                        require("controlador/cUsoOficina1.php");
                        break;
                    case 'cerrar_sesion':
                        require("Cerrar_Session.php");
                        break;
                    case 'vInscribirEvento':
                        $ac_evento=1;
                        require("controlador/cInscribirEvento.php");
                        break;
                    case 'insert_ins_evento':
                        $ac_evento=2;
                        require("controlador/cInscribirEvento.php");
                        break;
                    case 'vIngresarPrestamoEquipo':
                        $ac_prestamo=1;
                        require("controlador/cIngresarPrestamoEquipo.php");
                        break;
                    case 'insert_pres_equipo':
                        $ac_prestamo=2;
                        require("controlador/cIngresarPrestamoEquipo.php");
                        break;
                    case 'vIngresarBitacora':
                        $ac_bitacora=1;
                        require("controlador/cIngresarBitacora.php");
                        break;
                    case 'insert_bitacora':
                        $ac_bitacora=2;
                        require("controlador/cIngresarBitacora.php");
                        break;
                    case 'vBitacoraModif':
                        $ac_bitacora=3;
                        $id=$_GET['id'];
                        require("controlador/cIngresarBitacora.php");
                        break;
                    case 'bitaUpdated':
                        $ac_bitacora=4;
                        require("controlador/cIngresarBitacora.php");
                        break;
                    case 'vPerfilUsuario':
                        $ac_perfil=1;
                        require('controlador/cPerfilUsuario.php');
                        break;
                    case 'vPerfilModif':
                        $ac_perfil=2;
                        $cod=$_GET['cod'];
                        require('controlador/cPerfilUsuario.php');
                        break;
                    case 'modif_perfil':
                        $ac_perfil=3;
                        require("controlador/cPerfilUsuario.php");
                        break;
                    case 'vCambioPass':
                        $ac_perfil=4;
                        require("controlador/cPerfilUsuario.php");
                        break;
                    case 'passUpdated':
                        $ac_perfil=5;
                        require("controlador/cPerfilUsuario.php");
                        break;  
                    case 'vListaBitacoras':
                        $ac_listBitacora=1;
                        require('controlador/cListaBitacorasEmp.php');
                        break;
                    case 'vInscribirseIdeaNeg':
                        $ac_insIdea=1;
                        require('controlador/cInscribirseIdeaNegocio.php');
                        break;
                    case 'addMiembros':
                        $ac_insIdea=2;
                        require("controlador/cInscribirseIdeaNegocio.php");
                        break;
                    case 'detabita':
                        $cod=$_GET['cod'];
                        $ac_bitacora=5;
                        require('controlador/cIngresarBitacora.php');
                        break;
                    case 'detabita2':
                        $cod=$_GET['cod'];
                        $ac_listBitacora=2;
                        require('controlador/cListaBitacorasEmp.php');
                        break;
                    case 'bitaMentor':
                        $ac_bitaMentor=1;
                        require("controlador/cBitacorasMentor.php");
                        break;
                    case 'buscarBitacoras':
                        $ac_bitaMentor=2;
                        require("controlador/cBitacorasMentor.php");
                        break;
                    case 'detabitaMentor':
                        $cod=$_GET['cod'];
                        $ac_bitaMentor=3;
                        require('controlador/cBitacorasMentor.php');
                        break;
                    case 'vBitaModifMentor':
                        $ac_bitaMentor=4;
                        $cod=$_GET['cod'];
                        require("controlador/cBitacorasMentor.php");
                        break;
                    case 'bitaUpdatedMentor':
                        $ac_bitaMentor=5;
                        require("controlador/cBitacorasMentor.php");
                        break;
                    case 'vReportes':
                        $ac_reportes=1;
                        require("controlador/cListaReportes.php");
                        break;
                    case 'Reportes':
                        $ac_rep=$_GET['acrep'];
                        require('controlador/cReportes.php');
                        break;
                    default:
                        # code...
                        break;
            }
        ?>
        <?php 
            /* include('vista/footer.html'); */
        ?>
        
    
        
    <script src="recursos/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="recursos/js/menuUsuarios.js"></script> -->
    <script src="recursos/js/menuToggle.js"></script>
    <script src="recursos/jquery/jquery.min.js"></script>
    <script src="recursos/js/registrarse.js"></script>

    <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>
</html>