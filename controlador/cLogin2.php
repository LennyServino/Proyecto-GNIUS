<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
// Llamar la conexion
require('modelo/conexion.php');
$_SESSION['vsMensaje']='';
// Validar si existe la sesion
if(isset($_SESSION['vsUsuarioId']))
{
    $_SESSION['vsMensaje']='Usuario Valido';
    echo $_SESSION['vsMensaje'];
    echo '<script>'.'window.location.replace("index.php?acc=vlogin");'.'</script>';
}
else
{
    //Validar que vengan datos del formulario de login
    if(isset($_POST['txtUsuario']))
    {
        $login=mysqli_fetch_array($con->Login($conPublica,$_POST['txtUsuario']));
        //Si no encuentra el usuario
        if(!$login)
        {
            $_SESSION['vsMensaje']='Usuario no valido...';
           /*  echo '<script>alert("Usuario no valido....")</script>'; */
           echo "<script>"."Swal.fire({
            icon: 'error',
            title: 'Usuario o Contraseña incorrectos....',
            text: 'Usuario o Contraseña incorrectos....',
            confirmButtonText: 'Aceptar',
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
            stopKeydownPropagation: false,
            showConfirmButton: false,
            html: '<br><a href='+'index.php?acc=vlogin'+'>ACEPTAR</a>',

        })"."</script>";
        /* echo '<script>'.'window.location.replace("index.php?acc=vlogin");'.'</script>'; */
        }
        else if(password_verify($_POST['txtClave'], $login['contrasena']))
        {
            $_SESSION['vsUsuarioId']=$login['id_usuario'];
            $_SESSION['vsRolId']=$login['id_rol'];
            $_SESSION['vsNombreUsu']=$login['nombre_usuario'];
            $_SESSION['vsClave']=$login['contrasena'];
            $_SESSION['vsCorreo']=$login['correo'];
            $_SESSION['vsUsuarioId']=$login['id_usuario'];
            $_SESSION['vsDui']=$login['dui'];
            //$_SESSION['vsPersonaId']=$login['id_persona'];
            $_SESSION['vsMensaje']='Bienvenido '.$_SESSION['vsNombreUsu'];
            
            /* header('location:index.php?acc=vCrearEvento');  */
            echo '<script>'.'window.location.replace("index.php?acc=valPersona");'.'</script>';
        }
        else
        {
            $_SESSION['vsMensaje']='Usuario no valido...';
            /*  echo '<script>alert("Usuario no valido....")</script>'; */
            echo "<script>"."Swal.fire({
             icon: 'error',
             title: 'Usuario o Contraseña incorrectos....',
             text: 'Usuario o Contraseña incorrectos....',
             confirmButtonText: 'Aceptar',
             allowOutsideClick: false,
             allowEscapeKey: false,
             allowEnterKey: false,
             stopKeydownPropagation: false,
             showConfirmButton: false,
             html: '<br><a href='+'index.php?acc=vlogin'+'>ACEPTAR</a>',
 
         })"."</script>";
        }
    }
    else
    {
        $_SESSION['vsMensaje']='Acceso denegado';
        echo $_SESSION['vsMensaje'];
        /* echo '<script>alert("Usuario no valido....")</script>'; */
        echo "<script type='text/javascript'>"."Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href>Why do I have this issue?</a>'
        })"."</script>";
        echo '<script>'.'window.location.replace("index.php?acc=vlogin");'.'</script>';
    }
}  
?>