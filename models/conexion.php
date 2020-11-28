<?php

class Conexion {

	public function Conectar () {

		$link = new PDO("mysql:host=localhost;dbname=crm",
			"root",
			"",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);

		// $link = new PDO("mysql:host=localhost;dbname=duotek_sgtaller",
		// 	"duotek_usrtaller",
		// 	"sgtaller1234",
		// 	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		// );

		return $link;

	}

}


?>
