<?php  
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo de oficinas.
require('./modelo/mOficinas.php');
//Instancia de la clase
$obj=New Oficinas();
//Acciones del controlador
require('controlador/validarAdmin.php');
switch (@$ac_ofi) 
{
    case 1: //Vista del formulario de oficinas
        $resultado=$obj->MostrarOficinas($conPublica);
        require('vista/vOficinas.php');
        break;
    case 2: //Insertar Oficina
        //Capturar los datos del formulario
        $nomOfi=$_POST['nomOficina'];
        $capOfi=$_POST['capOficinas'];

        //Ejecutar el metodo AgregarOficina
        $resultado=$obj->AgregarOfina($conPublica,$nomOfi,$capOfi);
        //Enviar a la vista de oficinas
        echo '<script>'.'window.location.replace("index.php?acc=vOficinas");'.'</script>';
        break;
    case 3: //Vista de formulario de modificar oficinas
        $resultado=$obj->MostrarOficinasId($conPublica,$id);
        $filaOfi=$resultado->fetch_array();
        require('vista/vModificarOficina.php');
        break;
    case 4: //Actualizar los datos de la oficina
        //Capturar los datos del formulario ModificarOficina
        $nomOfi=$_POST['nomOficina'];
        $capOfi=$_POST['capOficinas'];
        $id=$_POST['idOficina'];

        //Ejecutar el metodo de ModificarOficina
        $resultado=$obj->ModificarOficina($conPublica,$id,$nomOfi,$capOfi);
        //Enviar a la vista de Oficinas.
        echo '<script>'.'window.location.replace("index.php?acc=vOficinas");'.'</script>';
        break;
    default:
        # code...
        break;
}
?>