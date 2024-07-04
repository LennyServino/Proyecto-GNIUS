<?php
class ListBitacora
{
	public function ObtenerBitacoras($conx, $id_equipo)
	{
		$sql="select * FROM vBitProyect where cod_equi='$id_equipo' order by cod_bit DESC";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function ObtenerPersona($conx, $id_usuario)
	{
		$sql="select * from vpersonas where cod_u='$id_usuario'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
	
	public function ObtenerEquipo($conx, $id_persona)
	{
		$sql="select * from vEquip where cod_p='$id_persona'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
	
	public function ObtenerIdea($conx, $id_persona)
	{
		$sql="select * from videaequipo where cod_p='$id_persona'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
	
	public function ObtenerUnaBitacora($conx, $cod, $id_equipo)
	{
		$sql="select * FROM vbitacoras where cod_equi='$id_equipo' and cod_bit='$cod'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
}
?>