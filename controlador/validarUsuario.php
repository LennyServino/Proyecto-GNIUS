<?php  
    if(!isset($_SESSION['vsUsuarioId']))
    {
        echo '<script>'.'window.location.replace("index.php?acc=vlogin");'.'</script>';
    }
?>