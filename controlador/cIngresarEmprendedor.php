<?php
//Llamar la conexion
require('./modelo/conexion.php');
//Llamar al modelo
require('./modelo/mIngresarEmprendedor.php');
//Crear la instancia de la clase
$obj=New Persona();
require('controlador/validarUsuario.php');
        //Insertar
		//Capturo los datos del formulario
        $nombres=$_POST['txtNombres'];
		$apellidos=$_POST['txtApellidos'];
		$edad=$_POST['txtEdad'];
		$nit=$_POST['txtNit'];
		$nacionalidad=$_POST['txtNacionalidad'];
        $genero=$_POST['txtGenero'];
        $lugar_nac=$_POST['txtLugarNac'];
        $fecha_nac=$_POST['txtFechaNac'];
        $telefono=$_POST['txtTelefono'];
        $direccion=$_POST['txtDireccion'];
        $grado_academico=$_POST['txtGradoAca'];
        $habilidades=$_POST['txtDesHabilidades'];
        $vinculo_utec=$_POST['txtVinculo'];
        $profesion=$_POST['txtProfesion'];
        $trabaja=$_POST['sltPregunta'];
        $puesto_trabajo=$_POST['txtPuesto'];
        $descripcion_puesto=$_POST['txtDesPuesto'];
        @$id_usuario=$_SESSION['vsUsuarioId'];
        $nombre_empresa=$_POST['txtNombreEmp'];
        $telefono_empresa=$_POST['txtTelTrabajo'];

        $directorio = "./archivos/hojas_de_vida/";
        $archivo = $directorio . basename($_FILES["file"]["name"]);

        //Ejecuto el metodo Agregar
		$resultado=$obj->AgregarPersona($conPublica,$nombres,$apellidos,$edad,$nit,$nacionalidad,$genero,$lugar_nac,$fecha_nac,$telefono,$direccion,$grado_academico,$habilidades,$vinculo_utec,$archivo,$profesion,$trabaja,$puesto_trabajo,$descripcion_puesto,$id_usuario,$nombre_empresa,$telefono_empresa);

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
        
        //Llamar al Inicio
		echo '<script>'.'window.location.replace("index.php?acc=inicioConsultor");'.'</script>';
?>