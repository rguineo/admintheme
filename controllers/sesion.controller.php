<?php 


Class ControllerSesion {

	public function iniciarSesionCtr() {

		if (isset($_POST["user"])) {
			$tabla = "usuarios";
			$usuario = $_POST["user"];

			$respuesta = (new ModeloSesion)->iniciarSesionMdl($tabla, $usuario);
			
			if($respuesta["user"] == $_POST["user"] && $respuesta["pass"] == $_POST["password"]) {

				$_SESSION["autenticar"] = "ok";
				$_SESSION["nombre"] = $respuesta["first_name"];
				$_SESSION["apellido"] = $respuesta["last_name"];
				
				$_SESSION["id"] = $respuesta["id"];
				$_SESSION["rol"] = $respuesta["level"];

				$_SESSION["user"] = $respuesta["user"];
				$_SESSION["password"] = $repuesta["pass"];

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