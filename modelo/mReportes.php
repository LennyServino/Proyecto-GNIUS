<?php
    class Reportes
    {
        public function ObtenerUsuarios($conx)
	    {
		    $sql='select * from vrptusuarios order by cod_rol';
		    $consulta=mysqli_query($conx,$sql);
		    return $consulta;
		}

		public function ObtenerUsuariosMasculinos($conx)
	    {
		    $sql="select * from vrptusuarios where gen='Masculino' order by cod_rol";
		    $consulta=mysqli_query($conx,$sql);
		    return $consulta;
		}

		public function ObtenerUsuariosFemeninos($conx)
	    {
		    $sql="select * from vrptusuarios where gen='Femenino' order by cod_rol";
		    $consulta=mysqli_query($conx,$sql);
		    return $consulta;
		}
		
		public function ObtenerInsEventos($conx)
	    {
		    $sql="select * from vrptInscritosEventos where est = 'Activo'";
		    $consulta=mysqli_query($conx,$sql);
		    return $consulta;
		}
		
		public function ObtenerUsoOficina($conx)
	    {
		    $sql="select * from rptusooficina";
		    $consulta=mysqli_query($conx,$sql);
		    return $consulta;
		}
		
		public function ObtenerPrestamoEquipo($conx)
	    {
		    $sql="select * from vprestamoequipotec";
		    $consulta=mysqli_query($conx,$sql);
		    return $consulta;
		}
		
		public function ObtenerGruposIdeaNeg($conx)
	    {
		    $sql="select * from vgruposideaneg order by cod_equi";
		    $consulta=mysqli_query($conx,$sql);
		    return $consulta;
		}
		
		public function ObtenerIdeasEnDesarrollo($conx)
	    {
		    $sql="select * from videasendesarrollo where est = 'En Proceso'";
		    $consulta=mysqli_query($conx,$sql);
		    return $consulta;
		}
		
		public function ObtenerIdeasFinalizadas($conx)
	    {
		    $sql="select * from videasendesarrollo where est = 'Finalizada'";
		    $consulta=mysqli_query($conx,$sql);
		    return $consulta;
		}
		
		public function ObtenerEquipoTec($conx)
	    {
		    $sql="select * from vequipotecno";
		    $consulta=mysqli_query($conx,$sql);
		    return $consulta;
	    }
    }
?>