<?php
class Bitacora
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
		$sql="select * from vIdeaNeg where cod_p='$id_persona'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function IngresarBitacora($conx, $numero_reunion,$fecha,$tema,$actividades_realizadas,$id_idea_neg,$id_persona)
	{
		$sql="CALL sp_InsertBitacora('$numero_reunion','$fecha','$tema','$actividades_realizadas','$id_idea_neg','$id_persona')";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}

	public function MostrarBitacoraId($conex, $id_bitacora, $id_equipo)
    {
        $sql="select * FROM vbitacoras where cod_equi='$id_equipo' and cod_bit='$id_bitacora'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

	public function ActualizarBitacora($conex, $numero_reunion, $fecha, $tema, $actividades_realizadas, $id)
    {
		$sql="CALL sp_ModificarBitacora('$numero_reunion','$fecha','$tema','$actividades_realizadas','$id')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
	}
}
?>