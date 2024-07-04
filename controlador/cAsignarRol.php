<?php  
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo de Asignar Roles
require('./modelo/mAsignarRol.php');
//Intancia de la clase
$obj=New AsignarRoles();
//Llamar al archivo de validacion si el usuario inicio sesion
require('controlador/validarAdmin.php');
//Acciones del controlador
switch (@$ac_rol) 
{
    case 1: //Vista de tabla de personas y rol
        $resultado=$obj->MostrarPersonas_Rol($conPublica);
        require('vista/vAsignarRoles.php');
        break;
    case 2: //Vista de formulario de modificacion de rol
        $resultado=$obj->MostrarPersonasId($conPublica,$id);
        $filaRol=$resultado->fetch_array();

        $resultado2=$obj->MostrarRoles($conPublica);
        require('vista/vModificarRol.php');
        break;
    case 3: //Actualizar el rol de la persona
        //Capturo los datos del formulario vModificarRol
        $rol=$_POST['roles'];
        $usuario=$_POST['idUsuario'];

        //Ejecutar el metodo para modificar el rol
        $resultado=$obj->ModificarRol($conPublica,$rol,$usuario);
        //Enviar a la vista de de la tabla personas y rol
        echo '<script>'.'window.location.replace("index.php?acc=vAsignarRoles");'.'</script>';
        break;
    default:
        # code...
        break;
}
?>