<?php
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo
require('./modelo/mIdeaNegocio.php');

//Crear la instancia de la clase
$obj=New Idea();
//Acciones del controlador
require('controlador/validarUsuario.php');
switch (@$ac_idea)
{
	case 1: //Consulta
		//Ejecutar el metodo especifico
        $juridica=$obj->ObtenerFormaJuridica($conPublica);
		$servicio=$obj->ObtenerServicio($conPublica);
		//Llamar vista 
		require('./vista/vIngresarIdeaNegocio.php');
        break;
	case 2: //Insertar
		@$id_usuario=$_SESSION['vsUsuarioId'];
		$persona=mysqli_fetch_array($obj->ObtenerPersona($conPublica, $id_usuario));

		$id_persona=$persona['codigo'];

        $nombre_proyecto=$_POST['txtNombreProyecto'];
		$id_tipo_idea=$_POST['sltTipoJuridica'];
		$id_tipo_servicio=$_POST['sltTipoServicio'];
		$razon_social=$_POST['txtRazonSocial'];
		$fecha_inicio=$_POST['txtFecha'];
		$oportunidades=$_POST['txtOportunidad'];
		$horas_trabajar=$_POST['txtHoras'];
		$equipo_propio=$_POST['sltEquipoPropio'];
		$descripcion_equipo=$_POST['txtDescripcionEquipo'];
		
		$directorio = "./archivos/plan_de_negocio/";
		$archivo = $directorio . basename($_FILES["file"]["name"]);

		//Ejecuto el metodo Agregar
		$resultado=$obj->AgregarIdea($conPublica,$nombre_proyecto,$id_tipo_idea,$id_tipo_servicio,$razon_social,$fecha_inicio,$oportunidades, $horas_trabajar, $equipo_propio, $descripcion_equipo, $id_persona, $archivo);
		
		$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        $checkDoc = filesize($_FILES["file"]["tmp_name"]);

        if($checkDoc != false)
        {
            //Validando el tamaño del archivo
            $size = $_FILES["file"]["size"];

            if($size > 500000)
            {
                //echo "El archivo tiene que ser menor a 500kb";
            }
            else
            {
                //Validar el tipo de archivo
                if($tipoArchivo == "docx" || $tipoArchivo == "pdf")
                {
                    //Se validó el archivo correctamente
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo))
                    {
                        //echo "El archivo se subió correctamente";
                    }
                    else
                    {
                        //echo "Huno un error en la subida del archivo";
                    }
                }
                else
                {
                    //echo "Solo se admiten archivos pdf o word";
                }
            }
        }
        else
        {
            //echo "El archivo no es un documento";
        }

		//Llamar al login 
		echo '<script>'.'window.location.replace("index.php?acc=inicioConsultor");'.'</script>';
		break;
	default:
		# code...
		break;
}
?>