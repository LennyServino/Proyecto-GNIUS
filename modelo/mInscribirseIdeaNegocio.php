<?php  
class InscribirseIdea
{
    public function MostrarIdeas($conex)
    {
        $sql="select * from vnomproyect";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function InsertarMiembroEquipo($conex, $id_persona, $id_equipo)
    {
        $sql="CALL sp_InsEquipo('$id_persona', '$id_equipo')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ObtenerPersona($conx, $id_usuario)
	{
		$sql="select * from vpersonas where cod_u='$id_usuario'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
	}
}
?>