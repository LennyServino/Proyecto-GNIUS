<?php
class Menus
{
	public function ObtenerMenu($conx, $id_rol)
	{
		$sql="CALL sp_Menus('$id_rol')";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
}
?>