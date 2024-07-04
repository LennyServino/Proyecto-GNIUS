<?php
class Persona
{
	public function AgregarPersona($conx, $nombres,$apellidos,$edad,$nit,$nacionalidad,$genero,$lugar_nac,$fecha_nac,$telefono,$direccion,$grado_academico,$habilidades,$vinculo_utec,$archivo,$profesion,$trabaja,$puesto_trabajo,$descripcion_puesto,$id_usuario,$nombre_empresa,$telefono_empresa)
	{
		$sql="CALL sp_AgregarPersona('$nombres','$apellidos','$edad','$nit','$nacionalidad','$genero','$lugar_nac','$fecha_nac','$telefono','$direccion','$grado_academico','$habilidades','$vinculo_utec','$archivo','$profesion','$trabaja','$puesto_trabajo','$descripcion_puesto','$id_usuario','$nombre_empresa','$telefono_empresa')";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function ObtenerPersona($conx, $id_usuario)
	{
		$sql="CALL sp_ObtenerPersona('$id_usuario')";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
}
?>