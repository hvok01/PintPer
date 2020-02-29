<?php
class HomeController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->mensaje="";
		$this->view->publicidad=array();
	}

	function render(){
		$this->view->render('home/index');
	}

	function renderLogins(){
		$this->view->render('home/logInUsuarios');
	}

	function user_comun(){
		$publi=$this->model->loadPublicidad();					
		$this->view->publicidad=$publi;
		$this->view->mensaje="hola esto es una prueba";
		$this->view->render('home/indexUsuarioComun');
	}

	function contacto(){
		$this->view->render('home/formularioPintper');
	}

	function user_prop(){
		$this->view->render('home/indexPropietario');
	}

	function user_admin(){
		$this->view->render('home/indexAdministrador');
	}
}
?>