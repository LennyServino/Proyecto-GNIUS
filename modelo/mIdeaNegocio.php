<?php
class Idea
{   
    public function ObtenerFormaJuridica($conx)
	{
		$sql="select codigo, descripcion from vjuridica";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function ObtenerServicio($conx)
	{
		$sql='select codigo, descripcion from vservicio';
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
	
	public function ObtenerPersona($conx, $id_usuario)
	{
		$sql="select * from vpersonas where cod_u='$id_usuario'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function AgregarIdea($conx, $nombre_proyecto,$id_tipo_idea,$id_tipo_servicio,$razon_social,$fecha_inicio,$oportunidades,$horas_trabajar,$equipo_propio,$descripcion_equipo,$id_persona,$archivo)
	{
		$sql="CALL sp_AgregarIdea('$nombre_proyecto','$id_tipo_idea','$id_tipo_servicio','$razon_social','$fecha_inicio','$oportunidades','$horas_trabajar','$equipo_propio','$descripcion_equipo','$id_persona','$archivo')";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
}
?>