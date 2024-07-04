<?php  
class IdeasEstado
{
    public function MostrarIdeasEstado($conex)
    {
        $sql="select * from videasproceso";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarIdeaCod($conex,$id)
    {
        $sql="select * from videasproceso where codigo='$id'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ModificarEstadoIdea($conex,$idIdea,$estad)
    {
        $sql="CALL sp_ModificarEstadoIdea('$idIdea','$estad')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>