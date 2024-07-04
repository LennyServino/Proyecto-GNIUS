<?php
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar el modelo del equipo tecnologico.
require('./modelo/mEquipoTec.php');
//Instancia de la clase
$obj=New EquipoTec();
//Accionde del controlador
require('controlador/validarAdmin.php');
switch (@$ac_tec) 
{
    case 1: //Vista de formulario
        $resultado=$obj->MostrarEquipoTec($conPublica);
        require('vista/vEquipoTecnologico.php');
        break;
    case 2: //Insertar Equipo Tecnologico
        //Capturar los datos del formulario
        $nomEqui=$_POST['nomEquipo'];
        $descEqui=$_POST['descEquipo'];
        $est='Disponible';

        //Ejecutar el metodo AgregarEquipoTec
        $resultado=$obj->AgregarEquipoTec($conPublica,$nomEqui,$descEqui,$est);
        //Enviar a la vista de equipo tecnologico
        echo '<script>'.'window.location.replace("index.php?acc=vEquipoTecnologico");'.'</script>';
        break;
    case 3: //Vista de formulario modificar equipo tecnologico
        $resultado=$obj->MostrarEquipoTecId($conPublica,$id);
        $filaTec=$resultado->fetch_array();
        require('vista/vModificarEquipoTec.php');
        break;
    case 4: //Actualizar los datos del equipo tecnologico
        //Capturar los datos del formulario de modificar equipo tecnologico
        $nomEqui=$_POST['nomEquipo'];
        $descEqui=$_POST['descEquipo'];
        $id=$_POST['idEquipo'];

        //Ejecutar el metodo ActualizarEquipoTec
        $resultado=$obj->ActualizarEquipoTec($conPublica,$id,$nomEqui,$descEqui);
        //Enviar a la vista de equipo tecnologico
        echo '<script>'.'window.location.replace("index.php?acc=vEquipoTecnologico");'.'</script>';
        break;
    default:
        # code...
        break;
}  
?>