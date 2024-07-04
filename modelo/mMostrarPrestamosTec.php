<?php  
class MostrarPrestamosTec
{
    public function MostrarPrestamos($conex)
    {
        $sql="select * from vprestamoequipo";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarPrestamosList($conex,$list)
    {
        $sql="select * from vprestamoequipo where estadPres='$list'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarTeamPersona($conex,$idPer)
    {
        $sql="select * from vmiembrosequipo where codPer='$idPer'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarPrestamosCod($conex,$cod)
    {
        $sql="select * from vprestamoequipo where codPres='$cod'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ModificarEstadoPrestamo($conex,$idPres,$estado,$idEquipoTec)
    {
        $sql="CALL sp_ModificarEstadoPrestamoTec('$estado','$idPres','$idEquipoTec')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>