<?php
class conexion
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

    public function Login($conn, $correo)
    {
        $resultado=mysqli_query($conn, "CALL sp_Login2('$correo');");
        return $resultado;
    }
}

//Para probar la conexion
$con=new Conexion();
$con->Conectar();
$conPublica=$con->conActiva;
/* La variable $conPublica podra ser usada en cualquier lugar 
donde se llame la conexion */ 
?>