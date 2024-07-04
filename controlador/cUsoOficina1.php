<?php
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo
require('./modelo/mUsoOficina1.php');

//Crear la instancia de la clase
$obj=New Oficina();
//Acciones del controlador
require('controlador/validarUsuario.php');
switch (@$ac_usoOficina)
{
	case 1: //Consulta
		//Ejecutar el metodo especifico
        $resultado=$obj->ObtenerOficina($conPublica);
		//Llamar vista 
		require('./vista/vUsoOficina1.php');
        break;
	case 2: //Insertar
		@$id_usuario=$_SESSION['vsUsuarioId'];
		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));

		$id_persona=$persona['codigo'];

        $actividad_realizar=$_POST['txtActividad'];
		$fecha=$_POST['txtFecha'];
		$hora=$_POST['txtHora'];
		$estado= 'En Uso';
		$tiempo_de_estadia=$_POST['txtTiempo'];
		$cantidad_acompa=$_POST['txtAcompa'];
		$id_oficina=$_POST['sltOficina'];

		$resultado=$obj->AgregarUsoOficina($conPublica, $actividad_realizar, $fecha, $hora, $estado, $tiempo_de_estadia, $cantidad_acompa, $id_oficina, $id_persona);
		echo '<script>'.'window.location.replace("index.php?acc=vUsoOficina1");'.'</script>';
		break;
	default:
		# code...
		break;
}
?>