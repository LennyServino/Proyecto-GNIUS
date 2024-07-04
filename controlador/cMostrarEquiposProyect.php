<?php  
//Llamar la conexion.
require('./modelo/conexion.php');
//Llamar al modelo MostrarEquiposProyect
require('./modelo/mMostrarEquiposProyect.php');
//Instancia de la clase
$obj=New MostrarEquiposProyecto();
//Llamar al archivo de validacion si el usuario inicio sesion
require('controlador/validarAdmin.php');
//Acciones del controlador
switch (@$ac_TeamPr) {
    case 1:
        $resultado=$obj->MostrarIdeasList($conPublica);

        $resultado2=$obj->MostrarTodosEquipos($conPublica);
        require('vista/vMostrarEquiposProyecto.php');
        break;
    case 2:
        $codTeam=$_POST['equipo'];
        if($codTeam == 'Todos')
        {
            $resultado=$obj->MostrarIdeasList($conPublica);

            $resultado2=$obj->MostrarTodosEquipos($conPublica);
            require('vista/vMostrarEquiposProyecto.php');
        }
        else
        {
            $resultado=$obj->MostrarIdeasList($conPublica);

            $resultado2=$obj->MostrarEquipos_x_Cod($conPublica,$codTeam);
            require('vista/vMostrarEquiposProyecto.php');
        }
        break;
    default:
        # code...
        break;
}
?>