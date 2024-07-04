<?php  
class AsignarMentores
{
    public function MostrarMentores($conex)
    {
        /* $sql="SELECT a.id_persona, a.nombres, a.apellidos FROM persona a INNER JOIN usuarios b ON a.id_usuario=b.id_usuario WHERE b.id_rol=3"; */
        $sql="select * from vmostrarmentores";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarIdeas($conex)
    {
        /* $sql="SELECT a.id_idea_neg, a.nombre_proyecto, b.id_equipo FROM idea_negocio a INNER JOIN equipos b on a.id_idea_neg=b.id_idea_neg"; */
        $sql="select * from videaslist";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarMentoresIdea($conex)
    {
        /* $sql="SELECT a.id_persona, a.nombres, a.apellidos, b.id_equipo, b.id_miembro, e.nombre_proyecto FROM persona a INNER JOIN miembros_de_equipo b 
        ON a.id_persona=b.id_persona 
        INNER JOIN usuarios c ON a.id_usuario=c.id_usuario INNER JOIN equipos d ON b.id_equipo=d.id_equipo INNER JOIN idea_negocio e
        ON d.id_idea_neg=e.id_idea_neg WHERE c.id_rol=3 ORDER BY a.id_persona DESC"; */
        $sql="select * from vmostrarmentores_idea where codRol =3 ORDER BY codTeam DESC";

        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function AsignarMentor($conex,$idPersona,$idEquipo)
    {
        $sql="CALL sp_AsignarMentor('$idPersona','$idEquipo')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function EliminarMentor($conex,$id)
    {
        $sql="CALL sp_EliminarMentor('$id')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>