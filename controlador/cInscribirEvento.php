<?php
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo
require('./modelo/mInscribirEvento.php');
//Crear la instancia de la clase
$obj=New Evento();
//Acciones del controlador
require('controlador/validarUsuario.php');
switch (@$ac_evento)
{
	case 1: //Consulta
		//Ejecutar el metodo especifico
		$resultado=$obj->ObtenerEvento($conPublica);

		@$id_usuario=$_SESSION['vsUsuarioId'];
		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));

		$id_persona=$persona['codigo'];

		$inscripcion=$obj->ObtenerInscripcion($conPublica,$id_persona);
		//Llamar vista 
		require('./vista/vInscribirEvento.php');
		break;
	case 2: //Insertar
		@$id_usuario=$_SESSION['vsUsuarioId'];
		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));

		$id_persona=$persona['codigo'];

        $id_evento=$_POST['sltEvento'];

		//Ejecuto el metodo Agregar
		$resultado=$obj->InscripcionEvento($conPublica,$id_persona,$id_evento);
		//Llamar al login 
		echo '<script>'.'window.location.replace("index.php?acc=vInscribirEvento");'.'</script>';
		break;
	default:
		# code...
		break;
}
?>