<?php 
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo MostrarPrestamosTec
require('./modelo/mMostrarPrestamosTec.php');
//Instancia de la clase.
$obj=New MostrarPrestamosTec();
//Llamar al archivo de validacion si el usuario inicio sesion
require('controlador/validarAdmin.php');
//Acciones del controlador
switch (@$ac_prestaTec) 
{
    case 1:
        $resultado=$obj->MostrarPrestamos($conPublica);
        require('vista/vMostrarPrestamoTec.php');
        break;
    case 2:
        $estado=$_POST['bEstado'];
        if($estado == 'Todos')
        {
            $resultado=$obj->MostrarPrestamos($conPublica);
            require('vista/vMostrarPrestamoTec.php');
        }
        else
        {
            $resultado=$obj->MostrarPrestamosList($conPublica,$estado);
            require('vista/vMostrarPrestamoTec.php');
        }
        break;
    case 3:
        $resultado=$obj->MostrarPrestamosCod($conPublica,$id);
        $filaPrestamo=$resultado->fetch_array();

        $resultado2=$obj->MostrarTeamPersona($conPublica,$idPer);
        $filaPersona=$resultado2->fetch_array();
        
        require('vista/vModificarEstadoPrestamo.php');
        break;
    case 4:
        //Capturo los datos del formulario.
        $estado=$_POST['bEstado'];
        $idPres=$_POST['idPrestamo'];
        $idEquipoTec=$_POST['idTec'];

        //Ejecuto el metodo para actualizar.
        $resultado=$obj->ModificarEstadoPrestamo($conPublica,$idPres,$estado,$idEquipoTec);
        //Enviar a la vista de prestamos.
        echo '<script>'.'window.location.replace("index.php?acc=vMostrarPrestamoTec");'.'</script>';
        break;
    default:
        # code...
        break;
} 
?>