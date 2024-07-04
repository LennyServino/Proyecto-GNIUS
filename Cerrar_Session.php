<?php
//session_start(); //inicio las variables de session
session_destroy(); //Elimino las variables de sesion
echo '<script>'.'window.location.replace("index.php?acc=vlogin");'.'</script>';
//header('location:index.php?acc=vlogin'); //Redirijo hacia el index
//Recuerde que acc=0 es cargar el formulario de login
?>