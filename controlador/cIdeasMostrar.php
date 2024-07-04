<?php  
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo Ideas Mostrar
require('./modelo/mIdeasMostrar.php');
//Instancia de la clase
$obj=New IdeasEstado();
//Llamar al archivo de validacion si el usuario inicio sesion
require('controlador/validarAdmin.php');
//Acciones del controlador
switch (@$ac_mIdea) 
{
    case 1: //Vista de la tabla de ideas con su estado.
        $resultado=$obj->MostrarIdeasEstado($conPublica);
        require('vista/vMostrarIdeasEstado.php');
        break;
    case 2:
        $resultado=$obj->MostrarIdeaCod($conPublica,$id);
        $filaIdea=$resultado->fetch_array();

        require('vista/vModificarEstadoIdea.php');
        break;
    case 3:
        //Capturo los datos del formulario
        $estado=$_POST['estado'];
        $idea=$_POST['idIdea'];

        //Ejecutar el metodo de actualizar el estado de la idea.
        $resultado=$obj->ModificarEstadoIdea($conPublica,$idea,$estado);
        //Enviar a la vista de la tabla de las ideas.
        echo '<script>'.'window.location.replace("index.php?acc=vIdeasMostrar");'.'</script>';

        break;
    default:
        # code...
        break;
}
?>