<?php
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo
require('./modelo/mPerfilUsuario.php');
//Crear la instancia de la clase
$obj=New Perfil();
//Acciones del controlador
require('controlador/validarUsuario.php');
switch (@$ac_perfil)
{
	case 1: //Consulta
		//Ejecutar el metodo especifico
		@$id_usuario=$_SESSION['vsUsuarioId'];

        $resultado=$obj->PerfilUsuario($conPublica, $id_usuario);
        $filaperfil=$resultado->fetch_array();
		//Llamar vista 
		require('./vista/vPerfilUsuario.php');
		break;
	case 2:
		//Ejecutar el metodo especifico
		@$id_usuario=$_SESSION['vsUsuarioId'];

        $resultado=$obj->PerfilUsuario($conPublica, $id_usuario);
        $filaperfil=$resultado->fetch_array();
		//Llamar vista 
		require('./vista/vModificarPerfilUsuario.php');
		break;
	case 3:
		$nom=$_POST['txtNombres'];
		$ape=$_POST['txtApellidos'];
		$usu=$_POST['txtUsuario'];
		$email=$_POST['txtCorreo'];
		$edad=$_POST['txtEdad'];
		$tel=$_POST['txtTelefono'];
		$grado_aca=$_POST['txtGradoAca'];
		$dir=$_POST['txtDireccion'];
		$prof=$_POST['txtProfesion'];
		$habilidad=$_POST['txtDesHabilidades'];
		$vinculo=$_POST['txtVinculo'];
		$trab=$_POST['txtTrabaja'];
		$nom_emp=$_POST['txtNombreEmp'];
		$descrip_puesto=$_POST['txtDesPuesto'];
		$puesto=$_POST['txtPuesto'];
		$tel_trabajo=$_POST['txtTelTrabajo'];
        $id_per=$_POST['txtIdPersona'];
        $id_usu=$_POST['txtIdUsuario'];
            
        $resultado=$obj->ActualizarPerfil($conPublica,$nom,$ape,$usu,$email,$edad,$tel,$grado_aca,$dir,$prof,$habilidad,$vinculo,$trab,$nom_emp,$descrip_puesto,$puesto,$tel_trabajo,$id_per,$id_usu);
            
        echo '<script>'.'window.location.replace("index.php?acc=vPerfilUsuario");'.'</script>';
		break;
	case 4:
		require('vista/vCambioContra.php');
		break;
	case 5:
		$pass=$_POST['txtClave'];
		@$id_usuario=$_SESSION['vsUsuarioId'];

		//encriptar contraseña
		$pass_encriptado=password_hash($pass, PASSWORD_DEFAULT, ['cost' => 12]);

		$resultado=$obj->ActualizarClave($conPublica,$pass_encriptado,$id_usuario);

		echo '<script>'.'window.location.replace("index.php?acc=vPerfilUsuario");'.'</script>';
		break;
	default:
		# code...
		break;
}
?>