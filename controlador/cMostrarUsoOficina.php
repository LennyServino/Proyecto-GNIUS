<?php  
//Llamar la conexion.
require('./modelo/conexion.php');
//Llamar al modelo MostrarUsoOficina
require('./modelo/mMostrarUsoOficina.php');
require('./modelo/mMostrarPrestamosTec.php');
//Instancia de la clase
$obj=New MostrarUsosOficinas();
$obj2=New MostrarPrestamosTec();
//LLamar la validacion de usuario.
require('controlador/validarAdmin.php');
//Acciones del controlador
switch (@$ac_usoOfi) 
{
    case 1:
        $resultado=$obj->MostrarUsoOficina($conPublica);
        require('vista/vMostrarUsoOficina.php');
        break;
    case 2:
        $resultado=$obj->MostrarUsoOficina_Cod($conPublica,$id);
        $consulta=$resultado->fetch_array();

        require('vista/vDetalleUsoOfi.php');
        break;
    case 3:
        $estado=$_POST['bEstado'];
        if(!isset($estado))
        {
            echo '<script>'.'window.location.replace("index.php?acc=vMostrarUsoOfi");'.'</script>';
        }
        else
        {
            if($estado == 'Todos')
            {
                $resultado=$obj->MostrarUsoOficina($conPublica);

                require('vista/vMostrarUsoOficina.php');
            }
            else
            {
                $resultado=$obj->MostrarUsoOficina_Estado($conPublica,$estado);

                require('vista/vMostrarUsoOficina.php');
            }
        }
        break;
    case 4:
        $resultado=$obj->MostrarUsoOficina_Cod($conPublica,$id);
        $filaPrestamo=$resultado->fetch_array();

        $resultado2=$obj2->MostrarTeamPersona($conPublica,$idPer);
        $filaPersona=$resultado2->fetch_array();

        require('vista/vModificarUsoOficina.php');
        break;
    case 5:
        $codRes=$_POST['idUso'];
        $estad=$_POST['bEstado'];

        $resultado=$obj->ModificarUsoOfi($conPublica,$codRes,$estad);
        echo '<script>'.'window.location.replace("index.php?acc=vMostrarUsoOfi");'.'</script>';
        break; 
    default:
        # code...
        break;
}
?>