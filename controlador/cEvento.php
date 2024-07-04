<?php
//LLamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo de evento.
require('./modelo/mEvento.php');
//Instancia de la clase
$obj=New Eventos();
//acciones del controlador
require('controlador/validarAdmin.php');
switch (@$ac_event) 
{
    case 1: //vista formulario
        $resultado=$obj->ConsultarTipoEvento($conPublica);
        require('vista/vCrearEvento.php');
        break;
    case 2://Insertar Evento
        //Capturar los datos del formulario
        $nomEv=$_POST['nombreEvento'];
        $horaEv=$_POST['horaEvento'];
        $fechaEv=$_POST['fechaEvento'];
        $lugarEv=$_POST['ubicacionEvento'];
        $cantEv=$_POST['cantAsistentes'];
        $estadoEv=$_POST['estadoEvento'];
        $tipoEv=$_POST['tipoEvento'];

        //Ejecutar el metodo AgregarEvento
        $resultado=$obj->AgregarEvento($conPublica,$nomEv,$horaEv,$fechaEv,$lugarEv,$cantEv,$estadoEv,$tipoEv);
        //Enviar a la vista de eventos.
        echo '<script>'.'window.location.replace("index.php?acc=vCrearEvento");'.'</script>';
        break;
    case 3:
        $resultado=$obj->MostrarEventos($conPublica);

        require('vista/vMostrarEventos.php');
        break;
    case 4:
        $estado=$_POST['bEstado'];
        if(!isset($estado))
        {
            echo '<script>'.'window.location.replace("index.php?acc=vEventosTodos");'.'</script>';
        }
        else
        {
            if($estado == 'Todos')
            {
                $resultado=$obj->MostrarEventos($conPublica);

                require('vista/vMostrarEventos.php');
            }
            else
            {
                $resultado=$obj->MostrarEventos_Estado($conPublica,$estado);

                require('vista/vMostrarEventos.php');
            }
        }
        break;
    case 5:
        $resultado=$obj->EliminarEvento($conPublica,$id);

        echo '<script>'.'window.location.replace("index.php?acc=vEventosTodos");'.'</script>';
        break;
    case 6:
        $resultado=$obj->MostrarEventos_Cod($conPublica,$id);
        $filaEvent=$resultado->fetch_array();

        require('vista/vModificarEstadoEve.php');
        break;
    case 7:
        $estado=$_POST['bEstado'];
        $idEvent=$_POST['idEvent'];

        $resultado=$obj->ModificarEstadoEvent($conPublica,$idEvent,$estado);
        echo '<script>'.'window.location.replace("index.php?acc=vEventosTodos");'.'</script>';
        break;
    default:
        # code...
        break;
}  
?>