<?php
class Evento
{
	public function ObtenerEvento($conx)
	{
		$sql='select * from vevnts 
		where est="Activo" and cant > 0 order by codigo DESC';
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function ObtenerInscripcion($conx, $id_persona)
	{
		$sql="select * from vlisteventinscrip where cod_per='$id_persona' order by codigo DESC";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function ObtenerPersona($conx, $id_usuario)
	{
		$sql="select * from vpersonas where cod_u='$id_usuario'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function InscripcionEvento($conx, $id_persona,$id_evento)
	{
		$sql="CALL sp_InsEvento('$id_persona', '$id_evento')";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
}
?>