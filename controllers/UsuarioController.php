<?php
require_once 'models/usuario.php';
session_start();
class UsuarioController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->user=array();
		$this->view->mensaje="";
		$this->view->id_p=0;
		$this->view->Error="";
		$this->view->publicidad=array();
	}
	
	function render(){
		$this->view->render('usuario/index');
	}

	function registroview(){
		$this->view->render('usuario/viewregistrarUC');
	}

	function registro(){
		$mail='/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
		if($_POST["nombreUsuario"]!="" & $_POST["correoUsuario"]!="" & $_POST["claveUsuario"] !=""){
			$estado=1;		
			$user=new Usuario();
			$user->setNickName($_POST["nombreUsuario"]);
			$user->setCorreo($_POST["correoUsuario"]);
			$user->setClave($_POST["claveUsuario"]);
			$user->setEstado($estado);
			
			if($this->model->resgistrarUsuario($user)){
				$this->view->mensaje="Ud se registro satifactoriamente";
				$this->registroview();
			}else{
				$this->view->Error="Error de Reistro";
				$this->registroview();
			}			
		}else{
			$this->view->Error="Debe completar todos los campos!";
			$this->registroview();
		}
		
	}

	function login(){
		$mail='/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
		$correo=htmlentities(addslashes($_POST["correoUsuario"]));
		$clave=htmlentities(addslashes($_POST["claveUsuario"]));

		if($correo!="" and $clave!=""){

			if(preg_match($mail,$correo)){
				
				$_SESSION['user_registrado']=$this->model->loginUser($correo);
				$user=$_SESSION['user_registrado'];		
				
				if($user!=null and $user->Clave==$clave){
					$publi=$this->model->loadPublicidad();					
					$this->view->publicidad=$publi;
					$this->view->render('home/indexUsuarioComun');
				}else{
					$this->view->mensaje="Correo o Contraseña incorrectos";
					$this->render();
				}

			}else{
				$this->view->mensaje="Ingrese un correo valido!";
				$this->render();
			}

		}else{
			$this->view->mensaje="Debe llenar todos los campos!";
			$this->render();
		}
	}

	function config(){
		$this->view->render('usuario/configUsuario');
	}

}
?>