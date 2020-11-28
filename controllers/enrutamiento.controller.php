<?php

class ControllerEnrutamiento {

	public function enrutamiento() {

		$ruta = $_GET["ruta"];

		if ($ruta == "home" ||

			//Mantenedores

			$ruta == "usuarios" ||

			$ruta == "salir") {

			include "views/modulos/".$ruta.".php";

		} else {
			include "views/modulos/error404.php";
		}


	}
}

?>
