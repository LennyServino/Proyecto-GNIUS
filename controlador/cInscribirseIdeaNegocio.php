<?php 
require('./modelo/conexion.php');
require('./modelo/mInscribirseIdeaNegocio.php');
$obj=New InscribirseIdea();
require('controlador/validarUsuario.php');
//Acciones del controlador
switch (@$ac_insIdea) 
{
    case 1:
        $resultado=$obj->MostrarIdeas($conPublica);
        require('vista/vInscribirseIdeaNegocio.php');
        break;
    case 2:
        @$id_usuario=$_SESSION['vsUsuarioId'];
		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));
        $id_persona=$persona['codigo'];
        
        $id_equipo=$_POST['sltEquipo'];

        $resultado=$obj->InsertarMiembroEquipo($conPublica, $id_persona, $id_equipo);

        echo '<script>'.'window.location.replace("index.php?acc=inicioConsultor");'.'</script>';
        break;
    default:
        # code...
        break;
}
?>