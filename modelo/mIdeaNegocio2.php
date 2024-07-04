<?php
class Servicio
{
	public function ObtenerServicio($conx)
	{
		$sql='CALL sp_TipoServicio';
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
    }
}
?>