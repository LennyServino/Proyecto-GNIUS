<?php  
class BitacorasEquipos
{
    public function MostrarIdeas($conex)
    {
        $sql="select * from videaslist";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarIdeasCod($conex,$codTeam)
    {
        $sql="select * from videaslist where codTeam='$codTeam'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarBitacoras($conex)
    {
        $sql="select * from vbitproyect";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarBitacorasCod($conex,$codTeam)
    {
        $sql="select * from vbitproyect where cod_equi='$codTeam' order by cod_bit DESC";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarBitacorasTodo($conex,$codBit)
    {
        $sql="select * from vbitacoras where cod_bit='$codBit'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>