<?php  
class InscritosEventos
{
    public function MostrarEventosAct($conex)
    {
        $sql="select * from vevnts where est='Activo'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarInsEventos($conex)
    {
        $sql="select * from vins_event";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarInsEventosCod($conex,$codEvent)
    {
        $sql="select * from vins_event where codEvent='$codEvent'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>