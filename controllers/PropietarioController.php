<?php 
session_start();
require_once 'models/propietario.php';
class PropietarioController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->user=array();
		$this->view->mensaje="";
		$this->view->id_p=0;
	}
	
	function render(){
		$this->view->render('propietario/index');
	}

	function login(){
		$correo=$_POST["correoUsuario"];
		$clave=$_POST["claveUsuario"];
		$user=$this->model->loginProp($correo);
		
		if($user!=null){
			$_SESSION['usuario_registrado']=$correo;
		 	$this->view->render('home/indexPropietario');		 	
		}else{
			$this->view->mensaje="Correo o Contraseña incorrectos";
			$this->render();
		}		
	}

	function registroView(){
		$this->view->render('propietario/registrarPropietario');
	}

	function registrar(){
		
		$estado=true;
		
		$user=new Propietario();
		$user->setNombre($_POST["Nombre"]);
		$user->setApellido($_POST["Apellido"]);
		$user->setDni($_POST["Documento"]);
		$user->setCorreo($_POST["Correo"]);
		$user->setClave($_POST["Clave"]);
		$user->setEstado($estado);
		if($this->model->registrarProp($user)){
			$this->view->mensaje="Se guardo";
			$this->registroview();
		}		
	}

	function configuraciones(){
		$this->view->render('propietario/configuracionesDuenio');	
	}
}

?>