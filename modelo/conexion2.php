<?php
class conexion2
{
    var $servidor='localhost';
    var $usuario='root';
    var $clave='';
    var $basedatos='proyecto_gnius';
    public $conActiva;

    public function Conectar()
    {
        $miconexion= new mysqli($this->servidor, $this->usuario, $this->clave, $this->basedatos);
        //Validar si conecta la BD.
        if($miconexion->connect_errno)
        {
            $mensaje = 'Error de conexion...';
            $miconexion->connect_error;
        }
        else
        {
            $mensaje = 'Conexion exitosa...';
            $this->conActiva=$miconexion;
        }
        return $mensaje;
    }

    public function Autenticar($conn, $usu, $cla)
    {
        $resultado=mysqli_query($conn, "CALL sp_Login('$usu','$cla');");
        return $resultado;
    }
}

//Para probar la conexion
$con=new Conexion2();
$con->Conectar();
$conPublica=$con->conActiva;
/* La variable $conPublica podra ser usada en cualquier lugar 
donde se llame la conexion */ 
?>