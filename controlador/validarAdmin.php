<?php  
    if(!isset($_SESSION['vsUsuarioId']))
    {
        echo '<script>'.'window.location.replace("index.php?acc=vlogin");'.'</script>';
    }

    if($_SESSION['vsRolId']!=4)
    {
        echo '<script>'.'window.location.replace("index.php?acc=inicioConsultor");'.'</script>';
    }
?>

