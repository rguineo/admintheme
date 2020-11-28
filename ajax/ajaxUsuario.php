<?php
require_once "../controllers/usuario.controller.php";
require_once "../models/usuario.modelo.php";

Class ajaxUsuario{
	public $_emlUsuario;
	public $_pasUsuario;
	public $_nomUsuario;
    public $_apeUsuario;
    public $_rolUsuario;
    public $_idUsuario;
    
    public function ajaxNuevoUsuario(){
        $datos = array(	"nomUsuario"=>$this->_nomUsuario,
                        "apeUsuario"=>$this->_apeUsuario,
                        "emlUsuario"=>$this->_emlUsuario,
                        "pasUsuario"=>$this->_pasUsuario,
                        "rolUsuario"=>$this->_rolUsuario);
		$respuesta = (new ctrUsuario)->ctrNuevoUsuario($datos);
		echo $respuesta;
	}

	public function ajaxEditarUsuario(){
        $id = $this->_idUsuario;
        $buscarUsuario = (new ctrUsuario);
        $respuesta = $buscarUsuario->ctrBuscarUsuario($id);
        echo json_encode($respuesta);

    }
    public function ajaxActualizarUsuario(){
        $datos = array(	"idUsuario"=>$this->_idUsuario,
                        "nomUsuario"=>$this->_nomUsuario,
                        "apeUsuario"=>$this->_apeUsuario,
                        "emlUsuario"=>$this->_emlUsuario,
                        "pasUsuario"=>$this->_pasUsuario,
                        "rolUsuario"=>$this->_rolUsuario);
		$respuesta = (new ctrUsuario)->ctrActualizarUsuario($datos);
		echo $respuesta;
	}

    public function eliminarUsuario(){
        $id = $this->getId_usuario();
        $eliminar = new ctrUsuario();
        $eliminar -> setIdUsuario($id);
        $respuesta = $eliminar -> ctrEliminarUsuario();
        echo $respuesta;
	}
}
    
    $tipoOperacion = $_POST["tipoOperacion"];

    if($tipoOperacion == "nuevoUsuario") {
        $crearNuevoUsuario = new ajaxUsuario();
        $crearNuevoUsuario -> _emlUsuario = $_POST["correoUsuario"];
        $crearNuevoUsuario -> _pasUsuario = $_POST["passUsuario"];
        $crearNuevoUsuario -> _nomUsuario = $_POST["nombreUsuario"];
        $crearNuevoUsuario -> _apeUsuario = $_POST["apellidoUsuario"];
        $crearNuevoUsuario -> _rolUsuario = $_POST["rolUsuario"];
        $crearNuevoUsuario -> ajaxNuevoUsuario();
    }
    
    if ($tipoOperacion == "editarUsuario") {
        $editarUsuario = new ajaxUsuario();
        $editarUsuario -> _idUsuario = $_POST["id_usuario"];
        $editarUsuario -> ajaxEditarUsuario();
    }
    
    if ($tipoOperacion == "actualizarUsuario") {
        $actualizarUsuario = new ajaxUsuario();
        $actualizarUsuario -> _emlUsuario = $_POST["correoUsuario"];
        $actualizarUsuario -> _pasUsuario = $_POST["passUsuario"];
        $actualizarUsuario -> _nomUsuario = $_POST["nombreUsuario"];
        $actualizarUsuario -> _apeUsuario = $_POST["apellidoUsuario"];
        $actualizarUsuario -> _rolUsuario = $_POST["ErolUsuario"];
        $actualizarUsuario -> _idUsuario = $_POST["idUsuario"];
        $actualizarUsuario -> ajaxActualizarUsuario();
    }

    if ($tipoOperacion == "eliminarUsuario") {
        $eliminarUsuario = new ajaxUsuario();
        $eliminarUsuario -> setIdUsuario($_POST["id"]);
        $eliminarUsuario -> eliminarUsuario();
    }
    
    ?>