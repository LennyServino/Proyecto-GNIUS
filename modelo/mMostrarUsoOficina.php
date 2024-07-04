<?php  
class MostrarUsosOficinas
{
    public function MostrarUsoOficina($conex)
    {
        $sql="select * from vmostrarusooficina group by codRes DESC";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarUsoOficina_Estado($conex,$estado)
    {
        $sql="select * from vmostrarusooficina where estad='$estado'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarUsoOficina_Cod($conex,$cod)
    {
        $sql="select * from vmostrarusooficina where codRes='$cod'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ModificarUsoOfi($conex,$codRes,$estad)
    {
        $sql="CALL sp_ModificarUsoOfi('$codRes','$estad')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>