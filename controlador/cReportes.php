<?php
require('controlador/validarAdmin.php');
switch (@$ac_rep)
{
    case 1: //Reporte Usuario
        echo '<script>'.'window.location.replace("reportes/reporteUsuarios.php");'.'</script>';
		break;
	case 2: //Reporte Uso de Oficinas
		echo '<script>'.'window.location.replace("reportes/rptUsoOficinas.php");'.'</script>';
		break;
	case 3: //Reporte Prestamo Equipo Tecnológico
		echo '<script>'.'window.location.replace("reportes/rptPrestamoEquipo.php");'.'</script>';
		break;
	case 4: //Reporte Grupos Ideas de Negocio
		echo '<script>'.'window.location.replace("reportes/rptGruposIdeaNeg.php");'.'</script>';
		break;
	case 5: //Reportes Inscritos a Eventos
		echo '<script>'.'window.location.replace("reportes/rptInscritosEventos.php");'.'</script>';
		break;
	case 6: //Reportes Proyectos En Desarrollo
		echo '<script>'.'window.location.replace("reportes/rptIdeasEnDesarrollo.php");'.'</script>';
		break;
	case 7: //Reportes Proyectos Terminados
		echo '<script>'.'window.location.replace("reportes/rptIdeasFinalizadas.php");'.'</script>';
		break;
	case 8: //Reportes Equipo del Área
		echo '<script>'.'window.location.replace("reportes/rptEquipoTec.php");'.'</script>';
		break;	
	case 9: //Reportes Usuarios Masculinos
		echo '<script>'.'window.location.replace("reportes/rptUsuariosMasculinos.php");'.'</script>';
		break;
	case 10: //Reportes Usuarios Femeninos
		echo '<script>'.'window.location.replace("reportes/rptUsuariosFemeninos.php");'.'</script>';
		break;	
	default:
		break;
}
?>