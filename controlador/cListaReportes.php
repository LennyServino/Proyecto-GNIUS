<?php
require('./modelo/conexion.php');

require('controlador/validarUsuario.php');
switch (@$ac_reportes)
{
	case 1:
		//Llamar vista 
		require('./vista/vReportes.php');
        break;
	default:
		# code...
		break;
}
?>