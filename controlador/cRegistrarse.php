<?php
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo
require('./modelo/mRegistrarse.php');
//Crear la instancia de la clase
$obj=New Registrarse();
//Acciones del controlador
switch (@$ac_reg)
{
	case 1: //Consulta
		//Ejecutar el metodo especifico
		$resultado=$obj->ObtenerRoles($conPublica);
		//Llamar vista 
		require('./vista/vRegistrarse.php');
		break;
	case 2: //Insertar
		//Capturo los datos del formulario
        $nom=$_POST['txtNombre'];
		$pass=$_POST['txtContrasena'];
		$correo=$_POST['txtCorreo'];
		$dui=$_POST['txtDui'];
		$pasaporte=$_POST['txtPasaporte'];
		$id_rol=$_POST['txtRol'];

		//encriptar contraseña
		$pass_encriptado=password_hash($pass, PASSWORD_DEFAULT, ['cost' => 12]);

		//Ejecuto el metodo Agregar
		$resultado=$obj->AgregarUsuario($conPublica,$nom,$pass_encriptado,$correo,$dui,$pasaporte,$id_rol);
		//Llamar al login 
		echo '<script>'.'window.location.replace("index.php?acc=vlogin");'.'</script>';
		break;
	default:
		# code...
		break;
}
?>