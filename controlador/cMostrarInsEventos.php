<?php  
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo InscritosEventos
require('./modelo/mInscritosEventos.php');
//Instancia de la clase
$obj=New InscritosEventos();
//Llamar al archivo de validacion si el usuario inicio sesion
require('controlador/validarAdmin.php');
//Acciones del controlador
switch (@$ac_InsEvent) {
    case 1:
        $resultado=$obj->MostrarEventosAct($conPublica);
        $resultado2=$obj->MostrarInsEventos($conPublica);

        require('vista/vMostrarInsEventos.php');
        break;
    case 2:
        $codEvent=$_POST['evento'];
        if(!isset($codEvent))
        {
            echo '<script>'.'window.location.replace("index.php?acc=vMostrarInsEvent");'.'</script>';
        }
        else
        {
            if($codEvent == 'Todos')
            {
                $resultado=$obj->MostrarEventosAct($conPublica);

                $resultado2=$obj->MostrarInsEventos($conPublica);
                require('vista/vMostrarInsEventos.php');
            }
            else
            {
                $resultado=$obj->MostrarEventosAct($conPublica);

                $resultado2=$obj->MostrarInsEventosCod($conPublica,$codEvent);
                require('vista/vMostrarInsEventos.php');
            }
        }
        break;
    default:
        # code...
        break;
}
?>