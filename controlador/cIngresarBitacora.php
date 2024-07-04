<?php
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo
require('./modelo/mIngresarBitacora.php');
//Crear la instancia de la clase
$obj=New Bitacora();
//Acciones del controlador
require('controlador/validarUsuario.php');
switch (@$ac_bitacora)
{
	case 1: //Consulta
		//Ejecutar el metodo especifico
		@$id_usuario=$_SESSION['vsUsuarioId'];

		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
		$id_persona=$persona['codigo'];

		$equipo=mysqli_fetch_array($obj->ObtenerEquipo($conPublica, $id_persona));
		$id_equipo=$equipo['cod_equi'];
		
		$resultado2=mysqli_fetch_array($obj->ObtenerIdea($conPublica, $id_persona));

		$resultado=$obj->ObtenerBitacoras($conPublica, $id_equipo);
		//Llamar vista 
		require('./vista/vIngresarBitacora.php');
		break;
	case 2: //Insertar
		@$id_usuario=$_SESSION['vsUsuarioId'];
		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
		$id_persona=$persona['codigo'];

        $idea=mysqli_fetch_array($obj->ObtenerIdea($conPublica, $id_persona));
        $id_idea_neg=$idea['cod_neg'];

        $numero_reunion=$_POST['txtNumReunion'];
        $fecha=$_POST['txtFecha'];
        $tema=$_POST['txtTema'];
        $actividades_realizadas=$_POST['txtActividades'];

		//Ejecuto el metodo Agregar
		$resultado=$obj->IngresarBitacora($conPublica,$numero_reunion,$fecha,$tema,$actividades_realizadas,$id_idea_neg,$id_persona);
		//Llamar al login 
		echo '<script>'.'window.location.replace("index.php?acc=vIngresarBitacora");'.'</script>';
		break;
	case 3:
		@$id_usuario=$_SESSION['vsUsuarioId'];

		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
		$id_persona=$persona['codigo'];

		$equipo=mysqli_fetch_array($obj->ObtenerEquipo($conPublica, $id_persona));
		$id_equipo=$equipo['cod_equi'];

		$resultado=$obj->MostrarBitacoraId($conPublica,$id,$id_equipo);
		$filabitacora=$resultado->fetch_array();
		require('vista/vModificarBitacora.php');
		break;
	case 4:
		$numero_reunion=$_POST['txtReunion'];
        $fecha=$_POST['txtFecha'];
		$tema=$_POST['txtTema'];
		$actividades_realizadas=$_POST['txtActividades'];
        $id=$_POST['txtIdBitacora'];
        
        $resultado=$obj->ActualizarBitacora($conPublica,$numero_reunion,$fecha,$tema, $actividades_realizadas,$id);
        
        echo '<script>'.'window.location.replace("index.php?acc=vIngresarBitacora");'.'</script>';
		break;
	case 5:
		@$id_usuario=$_SESSION['vsUsuarioId'];
	
		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
		$id_persona=$persona['codigo'];
	
		$equipo=mysqli_fetch_array($obj->ObtenerEquipo($conPublica, $id_persona));
		$id_equipo=$equipo['cod_equi'];
		$cod=$_GET['cod'];
		$resultado2=mysqli_fetch_array($obj->ObtenerIdea($conPublica, $id_persona));
		$resultado=$obj->MostrarBitacoraId($conPublica,$cod,$id_equipo);
		$consulta=$resultado->fetch_array();
		require('vista/vDetalleBitacoraLider.php');
		break;
	default:
		# code...
		break;
}
?>