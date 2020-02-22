<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
require_once 'models/propietario.php';
class PropietarioController extends Controller{	
	
	function __construct(){
		parent::__construct();
		$this->view->user=array();
		$this->view->mensaje="";
		$this->view->Error="";
		$this->view->id_p=0;
	}
	
	function render(){
		$this->view->render('propietario/index');
	}

	function login(){
		$mail='/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
		$correo=htmlentities(addslashes($_POST["correoUsuario"]));
		$clave=htmlentities(addslashes($_POST["claveUsuario"]));

		if($correo!="" and $clave!=""){
			if(preg_match($mail,$correo)){
				$_SESSION['usuario_registrado']=$this->model->loginProp($correo);
				$user=$_SESSION['usuario_registrado'];				
				if($user!=null){
					$this->view->render('home/indexPropietario');
				}else{
					$this->view->mensaje="Correo o Contraseña incorrectos";
					$this->render();
				}
			}else{
				$this->view->mensaje="Ingrese un correo valido!";
				$this->render();
			}
		}
		else{
				$this->view->mensaje="Debe llenar todos los campos!";
				$this->render();
		}
	}

	function registroView(){
		$this->view->render('propietario/registrarPropietario');
	}

	function registrar(){
		$mail='/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
		$doc='/[0-9]{8}$/'	;
		if($_POST["Nombre"]!="" and $_POST["Apellido"]!="" and $_POST["Documento"]!="" and 
		$_POST["Correo"]!="" and $_POST["Clave"]!=""){

			if(!(preg_match($doc,$_POST["Documento"]))){
				$this->view->Error="Ingrese un número de documento valido! ";
				$this->registroview();
				exit;
			}

			if(!(preg_match($mail,$_POST["Correo"]))){
				$this->view->Error="Ingrese un correo valido!";
				$this->registroview();
				exit;
			}

			$estado=false;		
			$user=new Propietario();
			$user->setNombre($_POST["Nombre"]);
			$user->setApellido($_POST["Apellido"]);
			$user->setDni($_POST["Documento"]);
			$user->setCorreo($_POST["Correo"]);
			$user->setClave($_POST["Clave"]);
			$user->setProvincia($_POST['provincias']);
			$user->setEstado($estado);

			if($this->model->registrarProp($user)){
				$this->view->mensaje="Se guardo";				
				$this->registroview();
			}
		}else{
			$this->view->Error="Debe completar todos los campos!";
			$this->registroview();
		}
		
	}


	function configuraciones(){
		$this->view->render('propietario/configuracionesDuenio');	
	}
}

?>