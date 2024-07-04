<?php
class Perfil
{
    public function PerfilUsuario($conex, $id_usuario)
    {
        $sql="CALL sp_PerfilUsuario('$id_usuario')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ActualizarPerfil($conex, $nom, $ape, $usu, $email, $edad, $tel, $grado_aca, $dir, $prof, $habilidad, $vinculo, 
    $trab, $nom_emp, $descrip_puesto, $puesto, $tel_trabajo, $id_per, $id_usu)
    {
        $sql="CALL sp_ActualizarPerfilUsuario('$nom', '$ape', '$usu', '$email', '$edad', '$tel', '$grado_aca', '$dir', '$prof', 
        '$habilidad', '$vinculo', '$trab', '$nom_emp', '$descrip_puesto', '$puesto' ,'$tel_trabajo', '$id_per', '$id_usu')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }

    public function ActualizarClave($conex, $clave, $id_usuario)
    {
        $sql="CALL sp_ModificarClave('$clave','$id_usuario')";
        $consulta=mysqli_query($conex,$sql);
        return $consulta;
    }
}  
?>