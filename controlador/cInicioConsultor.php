<?php  
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo del Inicio de consultores
require('./modelo/mInicioConsultor.php');
//Instanciar la clase del modelo
$obj=New InicioConsultor();
//acciones del controlador
switch (@$ac_inicio) 
{
    case 1: //Vista de inicio consultor
        $resultado=$obj->MostrarIdeas($conPublica);
        require('vista/Inicio.php');
        break;
    case 2:
        $resultado=$obj->MostrarIdeas_Cod($conPublica,$codIdea);
        $filaIdea=$resultado->fetch_array();

        require('vista/vDetalleIdea.php');
        break;
    default:
        # code...
        break;
}
?>