<?php
class Oficina
{
	public function ObtenerOficina($conx)
	{
		$sql='select * from vlistaoficina where cap_per > 0 order by cod_ofi DESC';
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function ObtenerPersona($conx, $id_usuario)
	{
		$sql="select * from vpersonas where cod_u='$id_usuario'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function AgregarUsoOficina($conx, $actividad_realizar, $fecha, $hora, $estado, $tiempo_de_estadia, $cantidad_acompa, $id_oficina, $id_persona)
	{
		$sql="CALL sp_AgregarUsoOficina('$actividad_realizar', '$fecha', '$hora', '$estado', '$tiempo_de_estadia', '$cantidad_acompa', '$id_oficina', '$id_persona')";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
}
?>