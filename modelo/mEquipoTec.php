<?php
class EquipoTec
{
    public function AgregarEquipoTec($conex, $nomEqui, $descEqui, $est)
    {
        $sql="CALL sp_AgregarEquipoTec('$nomEqui','$descEqui','$est')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarEquipoTec($conex)
    {
        $sql="CALL sp_MostrarEquipoTec";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarEquipoTecId($conex, $id)
    {
        $sql="CALL sp_MostrarEquipoTec_Id('$id')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ActualizarEquipoTec($conex, $id_equipo_tec, $nomEqui, $descEqui)
    {
        $sql="CALL sp_ModificarEquipoTec('$id_equipo_tec','$nomEqui','$descEqui')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}  
?>