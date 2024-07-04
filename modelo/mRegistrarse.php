<?php
class Registrarse
{
	public function ObtenerRoles($conx)
	{
		$sql='CALL sp_Roles';
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
	public function AgregarUsuario($conx, $nom,$pass,$correo,$dui,$pasaporte,$id_rol)
	{
		$sql="CALL sp_AgregarUsuario('$nom','$pass','$correo','$dui','$pasaporte','$id_rol')";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
}
?>