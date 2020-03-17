<?php 
session_start();
require_once 'models/administrador.php';
class AdministradorController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->user=array();
		$this->view->mensaje="";
		$this->view->id_p=0;
	}
	
	function render(){
		$this->view->render('administrador/loginAdmin');
	}

	function index() {
		$this->view->render('home/indexAdministrador');	
	}

	function login(){
		$correo=$_POST["correoUsuario"];
		$clave =$_POST["claveUsuario"];
		$user  =$this->model->loginAdmin($correo);
		
		if($user!=null){
			$_SESSION['usuario_registrado']=$correo;
		 	$this->view->render('home/indexAdministrador');		 	
		}else{
			$this->view->mensaje="Correo o Contraseña incorrectos";
			$this->render();
		}		
	}

	function configuraciones(){
		$this->view->render('administrador/configuracionesAdmin');	
	}

	function editarUsuario() {
		$this->view->render('administrador/editarUsuarioDesdeAdmin');	
	}
}

?>