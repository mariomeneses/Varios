<?php
class mainSys {

	public function conectar(){
		$user="root";
		$pass="root";
		$server="localhost";
		$db="Prueba_cosas";
		$con=mysql_connect($server,$user,$pass) or die ("Error al conectar").mysql_error();
		mysql_select_db($db,$con);

		return $con;

	}

	public function mostrar(){
		$consulta = mysql_query("SELECT * FROM usuario order by nombre ASC");
		$usuarios = array();
		while($row = mysql_fetch_array($consulta, MYSQL_ASSOC))
		{
			$usuarios[] = array(
					'nombre' => $row['nombre'],
					'mail' => $row['mail'],
					'pass' => $row['pass'],
					'fecha' => $row['fecha'],
				);
		}

		return $usuarios;
	}

	public function eliminar($nombre){
		$sql=("DELETE FROM usuario where nombre='$nombre'");
		mysql_query($sql);
	}
}
?>