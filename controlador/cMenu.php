<?php
    require('./modelo/conexion2.php');
    require('./modelo/mMenu.php');
    $obj=New Menus();
    //require('controlador/validarUsuario.php');

    @$id_rol=$_SESSION['vsRolId'];

    $resultado=$obj->ObtenerMenu($conPublica, $id_rol);
    require('./vista/menuUsuario.php');
?>