<?php
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo
require('./modelo/mIngresarPrestamoEquipo.php');

//Crear la instancia de la clase
$obj=New Prestamo();
//Acciones del controlador
require('controlador/validarUsuario.php');
switch (@$ac_prestamo)
{
	case 1: //Consulta
		//Ejecutar el metodo especifico
		$resultado=$obj->ObtenerEquipo($conPublica);
		
		@$id_usuario=$_SESSION['vsUsuarioId'];
		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));

		$id_persona=$persona['codigo'];

		$resultado2=$obj->ObtenerEquipo2($conPublica,$id_persona);
		//Llamar vista 
		require('./vista/vIngresarPrestamoEquipo.php');
        break;
	case 2: //Insertar
		@$id_usuario=$_SESSION['vsUsuarioId'];
		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));

		$id_persona=$persona['codigo'];

        $id_equipo_tec=$_POST['sltEquipo'];
		$estado= 'Espera';
		$fecha=$_POST['txtFecha'];
		$hora=$_POST['txtHora'];
		$tiempo_uso=$_POST['txtTiempo'];

		//Ejecuto el metodo Agregar
		$resultado=$obj->AgregarPrestamoEquipo($conPublica,$id_equipo_tec,$id_persona,$estado,$fecha,$hora,$tiempo_uso);
		//Llamar al login 
		echo '<script>'.'window.location.replace("index.php?acc=vIngresarPrestamoEquipo");'.'</script>';
		break;
	default:
		# code...
		break;
}
?>