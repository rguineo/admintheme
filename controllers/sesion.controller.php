<?php 


Class ControllerSesion {

	public function iniciarSesionCtr() {

		if (isset($_POST["user"])) {
			$tabla = "usuarios";
			$usuario = $_POST["user"];

			$respuesta = (new ModeloSesion)->iniciarSesionMdl($tabla, $usuario);
			
			if($respuesta["usuario"] == $_POST["user"] && $respuesta["clave"] == $_POST["password"]) {

				$_SESSION["autenticar"] = "ok";
				$_SESSION["nombre"] = $respuesta["nombre_usuario"];
				$_SESSION["apellido"] = $respuesta["apellido_usuario"];
				
				$_SESSION["id"] = $respuesta["id_usuario"];
				$_SESSION["rol"] = $respuesta["id_rol"];
				$_SESSION["id_empresa"] = $respuesta["id_empresa"];
				$_SESSION["user"] = $respuesta["usuario"];
				$_SESSION["password"] = $repuesta["clave"];

				echo '
					<script>
						window.location = "home"
					</script>
				';

			} else {
				echo '<br>
					<div class="alert alert-danger">
						Datos incorrectos. Inténtelo nuevamente.
					</div>	
				';
			}
		}
	}
}

?>