<?php  
//Llamar la conexion
require('./modelo/conexion.php');

/* LLamamos al modelo de prestamo de equipo ya que se reutilizara un procedimiento almacenado
para obtener los datos de la tabla persona */
require('./modelo/mIngresarPrestamoEquipo.php');

//Crear la instancia de la clase
$obj=New Prestamo();

//Capturamos el id del usuario.
@$id_usuario=$_SESSION['vsUsuarioId'];

//Ejecutamos el procedimiento.
$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));


if(!isset($persona))
{
    echo '<script>'.'window.location.replace("index.php?acc=datosPersonales&men=3");'.'</script>';
}
else
{
    //guardamos el id del usuario de la tabla persona.
    $id_persona=$persona['cod_u'];

    if($id_usuario == $id_persona)
    {
        echo '<script>'.'window.location.replace("index.php?acc=inicioConsultor");'.'</script>';
    }
    else
    {
        echo '<script>'.'window.location.replace("index.php?acc=datosPersonales&men=3");'.'</script>';
    }
}

?>