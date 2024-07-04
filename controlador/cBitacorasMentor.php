<?php  
//Llamar la conexion.
require('./modelo/conexion.php');
//Llamar al modelo MostrarEquiposProyect
require('./modelo/mBitacorasMentor.php');
//Instancia de la clase
$obj=New MostrarBitacorasMentor();
//Llamar al archivo de validacion si el usuario inicio sesion
require('controlador/validarUsuario.php');
//Acciones del controlador
switch (@$ac_bitaMentor) {
    case 1:
        @$id_usuario=$_SESSION['vsUsuarioId'];

		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
        $id_persona=$persona['codigo'];
        
        $resultado=$obj->MostrarIdeasList($conPublica,$id_persona);

        $resultado2=$obj->MostrarTodasBitacoras($conPublica,$id_persona);
        require('vista/vBitacorasMentor.php');
        break;
    case 2:
        $codTeam=$_POST['equipo'];
        if(!isset($codTeam))
        {
            echo '<script>'.'window.location.replace("index.php?acc=bitaMentor");'.'</script>';
        }
        else
        {
            if($codTeam == 'Todos')
            {
                @$id_usuario=$_SESSION['vsUsuarioId'];

                $persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
                $id_persona=$persona['codigo'];

                $resultado=$obj->MostrarIdeasList($conPublica,$id_persona);

                $resultado2=$obj->MostrarTodasBitacoras($conPublica,$id_persona);
                require('vista/vBitacorasMentor.php');
            }
            else
            {
                @$id_usuario=$_SESSION['vsUsuarioId'];

                $persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
                $id_persona=$persona['codigo'];

                $resultado=$obj->MostrarIdeasList($conPublica,$id_persona);

                $resultado2=$obj->MostrarBitacoras_x_Cod($conPublica,$codTeam,$id_persona);
                require('vista/vBitacorasMentor.php');
            }
        }
        break;
        case 3:
            @$id_usuario=$_SESSION['vsUsuarioId'];

            $persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
            $id_persona=$persona['codigo'];

            $cod=$_GET['cod'];
		    $resultado=$obj->ObtenerUnaBitacora($conPublica,$cod,$id_persona);
		    $consulta=$resultado->fetch_array();
            require('vista/vDetalleBitacorasMentor.php');
            break;
        case 4:
            @$id_usuario=$_SESSION['vsUsuarioId'];

            $persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
            $id_persona=$persona['codigo'];

            $cod=$_GET['cod'];
		    $resultado=$obj->ObtenerUnaBitacora($conPublica,$cod,$id_persona);
		    $consulta=$resultado->fetch_array();
            require('vista/vModificarBitacorasMentor.php');
            break;
        case 5:
            $comentario=$_POST['txtComentario'];
            $id=$_POST['txtIdBitacora'];
            
            $resultado=$obj->ActualizarBitacora($conPublica,$comentario,$id);
            
            echo '<script>'.'window.location.replace("index.php?acc=bitaMentor");'.'</script>';
            break;
    default:
        # code...
        break;
}
?>