<?php
class Eventos
{
    public function AgregarEvento($conex,$nomEv,$horaEv,$fechaEv,$lugarEv,$cantEv,$estadoEv,$tipoEv)
    {
        $sql="CALL sp_AgregarEvento('$nomEv','$horaEv','$fechaEv','$lugarEv','$cantEv','$estadoEv','$tipoEv')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ConsultarTipoEvento($conex)
    {
        $sql="CALL sp_TipoEvento";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarEventos($conex)
    {
        $sql="select * from vevnts";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarEventos_Estado($conex,$estad)
    {
        $sql="select * from vevnts where est='$estad'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function EliminarEvento($conex,$idEve)
    {
        $sql="CALL sp_EliminarEvento('$idEve')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarEventos_Cod($conex,$idEvent)
    {
        $sql="select * from vevnts where codigo='$idEvent'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ModificarEstadoEvent($conex,$idEvent,$estad)
    {
        $sql="CALL sp_ModificarEstadoEvento('$idEvent','$estad')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}  
?>