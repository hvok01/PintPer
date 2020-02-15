<?php
require_once 'models/usuario.php';
session_start();
class UsuarioController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->user=array();
		$this->view->mensaje="";
		$this->view->id_p=0;
	}
	
	function render(){
		$this->view->render('usuario/index');
	}

	function registroview(){
		$this->view->render('usuario/viewregistrarUC');
	}

	function registro(){
		$estado=1;		
		$user=new Usuario();
		$user->setNickName($_POST["nombreUsuario"]);
		$user->setCorreo($_POST["correoUsuario"]);
		$user->setClave($_POST["claveUsuario"]);
		$user->setEstado($estado);
		if($_POST["nombreUsuario"]==""){
			$this->view->mensaje="Error... Debe llenar todos los campos";
			$this->registroview();
		}else{
			if($this->model->resgistrarUsuario($user)){
				$this->view->mensaje="Ud se registro satifactoriamente";
				$this->registroview();
			}else{
				$this->view->mensaje="Error de Reistro";
				$this->registroview();
			}
		}
	}

	function login(){
		$correo=$_POST["correoUsuario"];
		$clave=$_POST["claveUsuario"];
		$user=$this->model->loginUser($correo);
		if($user!=null){
			$_SESSION['usuario_registrado']=$correo;
			$this->view->render('home/indexUsuarioComun');
		}else{
			$this->view->mensaje="Correo o Contraseña incorrectos";
			$this->render();
		}
	}

	function config(){
		$this->view->render('usuario/configUsuario');
	}

}
?>