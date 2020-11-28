<?php 

require_once "conexion.php";

Class ModeloSesion {

	static public function iniciarSesionMdl($tabla, $usuario) {
		$sql = (new Conexion)->conectar()->prepare("SELECT usuarios.id_usuario, usuarios.nombre_usuario, usuarios.apellido_usuario, usuarios.usuario, usuarios.clave, rol.rol, rol.id_rol, usuarios.id_empresa, empresa.nombre_empresa
			FROM $tabla
			INNER JOIN rol
			ON usuarios.id_rol = rol.id_rol
			INNER JOIN empresa
			ON usuarios.id_empresa = empresa.id_empresa
			WHERE usuarios.usuario = '$usuario'");

		$sql -> execute();
		return $sql->fetch();
	}

}

?>