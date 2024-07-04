<?php  
class MostrarEquiposProyecto
{
    public function MostrarTodosEquipos($conex)
    {
        $sql="select * from vmiembrosequipo";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarIdeasList($conex)
    {
        $sql="select * from videaslist";
        $consulta=mysqli_query($conex,$sql);
        return $consulta; 
    }

    public function MostrarEquipos_x_Cod($conex,$codTeam)
    {
        $sql="select * from vmiembrosequipo where codTeam='$codTeam'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>