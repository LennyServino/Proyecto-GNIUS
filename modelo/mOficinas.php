<?php  
class Oficinas
{
    public function AgregarOfina($conex,$nomOfi,$capOfi)
    {
        $sql="CALL sp_AgregarOficina('$nomOfi','$capOfi')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarOficinas($conex)
    {
        $sql="CALL sp_MostrarOficinas";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ModificarOficina($conex,$idOfi,$nomOfi,$capOfi)
    {
        $sql="CALL sp_ModificarOficina('$idOfi','$nomOfi','$capOfi')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarOficinasId($conex,$id)
    {
        $sql="CALL sp_MostrarOficinas_Id('$id')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>