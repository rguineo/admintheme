<?php 

require_once "conexion.php";

class mdlUsuario {

	private $_tabla;
    private $_datos = array();
	private $_resultado = "";
	private $_idUsuario;

    public function setResultado($result){
        $this->_resultado = $result;
    }

    public function getResultado(){
        return $this->_resultado;
    }
    public function setTabla($tabla){
        $this->_tabla = $tabla;
    }

    public function getTabla(){
        return $this->_tabla;
    }

    public function setDatos($datos){
        $this->_datos = $datos;
    }

    public function getDatos(){
        return $this->_datos;
	}
	
	public function setIdUsuario($id){
		$this->_idUsuario = $id;
	}

	public function getIdUsuario(){
		return $this->_idUsuario;
	}

	public function consultaUsuario($tabla, $user){
		$sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE usuario = '$user'");
		$sql -> execute();

		if ( $sql->fetch() ){
            $res = "existe";
            // echo "existe";
            $this->setResultado($res);
        }else{
            $res = "vacio";
            // echo "noexiste";
            $this->setResultado($res);
        }
	}

	public function mdlNuevoUsuario($tabla, $datos) {
		$user = $datos["emlUsuario"];

		$this->consultaUsuario($tabla, $user);
		
		if ($this->getResultado() == "vacio"){
			$sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
			VALUES (NULL, :user, :pass, :nombre, :apellido, :rol, NULL)");
		
			$sql->bindParam(":user", $datos["emlUsuario"], PDO::PARAM_STR);
			$sql->bindParam(":pass", $datos["pasUsuario"], PDO::PARAM_STR);
			$sql->bindParam(":nombre", $datos["nomUsuario"], PDO::PARAM_STR);
			$sql->bindParam(":apellido", $datos["apeUsuario"], PDO::PARAM_STR);
			$sql->bindParam(":rol", $datos["rolUsuario"], PDO::PARAM_INT);
		
			if( $sql -> execute() ) {
				return "ok";
			} else {
				return "error";
			}
		}else {
			return "error";
		}

	}

	public function mdlEliminarUsuario($tabla, $id){

        $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_usuario = :id");
        
        $sql->bindParam(":id", $id, PDO::PARAM_INT);

        if( $sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

	public function mdlMostrarUsuario(){
		$tabla = $this->getTabla();
		$sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	public function mdlBuscarUsuario($tabla, $id){
		$sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_usuario = $id");
		$sql -> execute();
		return $sql->fetch();
	}

	public function mdlActualizarUsuario($tabla, $datos){
		$user = strtolower($datos["emlUsuario"]);
		$sql = (new Conexion)->conectar()->prepare("UPDATE $tabla 
		SET user = :user, password = :pass, nombre = :nombre, apellido = :apellido, rol = :rol
		WHERE id_usuario = :id");
	
		$sql->bindParam(":id", $datos["idUsuario"], PDO::PARAM_INT);
		$sql->bindParam(":user", $user, PDO::PARAM_STR);
		$sql->bindParam(":pass", $datos["pasUsuario"], PDO::PARAM_STR);
		$sql->bindParam(":nombre", $datos["nomUsuario"], PDO::PARAM_STR);
		$sql->bindParam(":apellido", $datos["apeUsuario"], PDO::PARAM_STR);
		$sql->bindParam(":rol", $datos["rolUsuario"], PDO::PARAM_INT);
	
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
}

?>