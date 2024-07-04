<?php  
class AsignarRoles
{
    public function MostrarPersonas_Rol($conex)
    {
        $sql="CALL sp_MostrarPersona_Rol";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarPersonasId($conex,$idusuario)
    {
        /* $sql="SELECT a.id_persona, a.nombres, a.apellidos, c.nombre_rol, b.id_usuario FROM persona a INNER JOIN usuarios b ON a.id_usuario=b.id_usuario
        INNER JOIN roles c on c.id_rol=b.id_rol WHERE a.id_usuario =$idusuario"; */
        $sql="select * from vmostrar_persona_rol where codUsu = '$idusuario'";

        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarRoles($conex)
    {
        /* $sql="SELECT * FROM roles"; */
        $sql="select * from vmostrar_roles";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ModificarRol($conex,$rol,$idusuario)
    {
        $sql="CALL sp_ModificarRol('$idusuario','$rol')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>