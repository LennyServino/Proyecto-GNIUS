<?php
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo
require('./modelo/mListaBitacorasEmp.php');
//Crear la instancia de la clase
$obj=New ListBitacora();
//Acciones del controlador
require('controlador/validarUsuario.php');
switch (@$ac_listBitacora)
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
		require('./vista/vListaBitacorasEmp.php');
		break;
	case 2:
		@$id_usuario=$_SESSION['vsUsuarioId'];

		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
		$id_persona=$persona['codigo'];

		$equipo=mysqli_fetch_array($obj->ObtenerEquipo($conPublica, $id_persona));
		$id_equipo=$equipo['cod_equi'];
		$resultado2=mysqli_fetch_array($obj->ObtenerIdea($conPublica, $id_persona));
		$cod=$_GET['cod'];
		$resultado=$obj->ObtenerUnaBitacora($conPublica,$cod,$id_equipo);
		$consulta=$resultado->fetch_array();
		require('vista/vDetalleBitacora.php');
		break;
	default:
		# code...
		break;
}
?>