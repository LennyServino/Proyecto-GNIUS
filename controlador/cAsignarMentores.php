<?php  
//Llamar la conexion
require('./modelo/conexion.php');
//LLamar al modelo de Asignar Mentores.
require('./modelo/mAsignarMentores.php');
//Intancia de la clase del modelo.
$obj=New AsignarMentores();
//LLamar la validacion de usuario.
require('controlador/validarAdmin.php');
//Acciones del controlador
switch (@$ac_mentor) 
{
    case 1: //Vista formulario de Asignar Mentores
        $resultado=$obj->MostrarMentores($conPublica);
        $resultado2=$obj->MostrarIdeas($conPublica);
        $resultado3=$obj->MostrarMentoresIdea($conPublica);
        require('vista/vAsignarMentores.php');
        # code...
        break;
    case 2: //Capturo los datos del formulario de Asignar Mentores
        $idPersona=$_POST['mentores'];
        $idEquipo=$_POST['ideas'];

        $resultado=$obj->AsignarMentor($conPublica,$idPersona,$idEquipo);
        echo '<script>'.'window.location.replace("index.php?acc=vAsignarMentores");'.'</script>';
        break;
    case 3: //Eliminar la asignacion del mentor.
        $resultado=$obj->EliminarMentor($conPublica,$id);

        echo '<script>'.'window.location.replace("index.php?acc=vAsignarMentores");'.'</script>';
        break;
    default:
        # code...
        break;
}
?>