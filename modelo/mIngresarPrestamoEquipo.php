<?php
class Prestamo
{
	public function ObtenerEquipo($conx)
	{
		$sql="select * from vequiptec where est = 'Disponible' order by codigo";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function ObtenerPersona($conx, $id_usuario)
	{
		$sql="select * from vpersonas where cod_u='$id_usuario'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function ObtenerEquipo2($conx, $id_persona)
	{
        $sql="select * from vprestequip where cod_p='$id_persona' order by cod DESC";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function AgregarPrestamoEquipo($conx, $id_equipo_tec,$id_persona,$estado,$fecha,$hora,$tiempo_uso)
	{
		$sql="CALL sp_InsertPrestEquip('$id_equipo_tec','$id_persona','$estado','$fecha','$hora','$tiempo_uso')";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
}
?>