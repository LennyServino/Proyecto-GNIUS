<?php  
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo MostrarBitacoras
require('./modelo/mMostrarBitacoras.php');
//Instancia de la clase
$obj=New BitacorasEquipos();
//Llamar al archivo de validacion si el usuario inicio sesion
require('controlador/validarAdmin.php');
//Acciones del controlador
switch (@$ac_mBitacoras) {
    case 1:
        $resultado=$obj->MostrarIdeas($conPublica);
        $resultado2=$obj->MostrarBitacoras($conPublica);

        require('vista/vMostrarBitacoras.php');
        break;
    case 2:
        $codTeam=$_POST['equipo'];
        if(!isset($codTeam))
        {
            echo '<script>'.'window.location.replace("index.php?acc=vMostrarBitacoras");'.'</script>';
        }
        else
        {
            if($codTeam == 'Todos')
            {
                $resultado=$obj->MostrarIdeas($conPublica);

                $resultado2=$obj->MostrarBitacoras($conPublica);
                require('vista/vMostrarBitacoras.php');
            }
            else
            {
                $resultado=$obj->MostrarIdeas($conPublica);

                $resultado2=$obj->MostrarBitacorasCod($conPublica,$codTeam);

                $resultado3=mysqli_fetch_array($obj->MostrarIdeasCod($conPublica,$codTeam));

                require('vista/vMostrarBitacoras.php');
            }
        }
        break;
    case 3:
        $resultado=$obj->MostrarBitacorasTodo($conPublica,$cod);
        $consulta=$resultado->fetch_array();

        $resultado3=mysqli_fetch_array($obj->MostrarIdeasCod($conPublica,$cod));

        require('vista/vDetalleBitacoraAdmin.php');
        break;
    default:
        # code...
        break;
}
?>