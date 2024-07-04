<?php  
class MostrarBitacorasMentor
{
    public function MostrarTodasBitacoras($conex,$id_persona)
    {
        $sql="select * from vbitamentor where cod_p='$id_persona'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarIdeasList($conex,$id_persona)
    {
        $sql="select * from vlistideasmentor where cod_p='$id_persona'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta; 
    }

    public function MostrarBitacoras_x_Cod($conex,$codTeam,$id_persona)
    {
        $sql="select * from vbitamentor where cod_equip='$codTeam' and cod_p='$id_persona'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ObtenerPersona($conx, $id_usuario)
	{
		$sql="select * from vpersonas where cod_u='$id_usuario'";
		$consulta=mysqli_query($conx,$sql);
		return $consulta;
    }
    
    public function ObtenerUnaBitacora($conx,$cod,$id_persona)
    {
        $sql="select * from vbitamentor where cod_p='$id_persona' and cod_bit='$cod'";
        $consulta=mysqli_query($conx,$sql);
		return $consulta;
    }

    public function ActualizarBitacora($conex, $comentario, $id)
    {
		$sql="CALL sp_ModificarBitacoraMentor('$comentario','$id')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>