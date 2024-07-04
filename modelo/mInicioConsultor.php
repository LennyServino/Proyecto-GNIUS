<?php  
class InicioConsultor
{
    public function MostrarIdeas($conex)
    {
        /* $sql="SELECT id_idea_neg, nombre_proyecto, razon_social FROM idea_negocio"; */
        $sql="select * from vmostrar_ideas_inicio where estad = 'En proceso'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function MostrarIdeas_Cod($conex,$codIdea)
    {
        $sql="select * from vmostrar_ideas_inicio where codIdea='$codIdea'";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}
?>