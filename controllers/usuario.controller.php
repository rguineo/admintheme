<?php 

class ctrUsuario{
	private $_datos = array();
	private $_idUsuario;

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

	public function ctrMostrarUsuario() {
		$tabla = "usuarios";
		$Musuario = new mdlUsuario();
		$Musuario->setTabla($tabla);
		$respuesta = $Musuario->mdlMostrarUsuario();
		return $respuesta;
	}

	public function ctrEliminarUsuario(){
        $tabla = "usuarios";
        $id = $this->getIdUsuario();
        $delUsuario = (new mdlUsuario);
        $respuesta = $delUsuario->mdlEliminarUsuario($tabla, $id);
        return $respuesta;
	}
	
	public function ctrNuevoUsuario($datos){
		$tabla = "usuarios";
		$nuevoUsuario = (new mdlUsuario);
		$respuesta = $nuevoUsuario->mdlNuevoUsuario($tabla, $datos);
		return $respuesta;
	}

	public function ctrBuscarUsuario($id){
		$tabla = "usuarios";
		$buscarUsuario = (new mdlUsuario);
		$respuesta = $buscarUsuario -> mdlBuscarUsuario($tabla, $id);
		return $respuesta;
	}

	public function ctrActualizarUsuario($datos){
		$tabla = "usuarios";
		$actualizarUsuario = (new mdlUsuario);
		$respuesta = $actualizarUsuario -> mdlActualizarUsuario($tabla, $datos);
		return $respuesta;
	}
}
?>