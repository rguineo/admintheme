<?php 

require_once "conexion.php";

Class ModeloSesion {

	static public function iniciarSesionMdl($tabla, $usuario) {
		$sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE user = '$usuario'");

		$sql -> execute();
		return $sql->fetch();
	}

}

?>