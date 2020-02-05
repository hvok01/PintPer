<?php
class HomeController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->mensaje="";
		$this->view->id_p=0;
	}

	function render(){
		$this->view->render('home/index');
	}

	function user_comun(){
		$this->view->render('home/indexUsuarioComun');
	}

	function contacto(){
		$this->view->render('home/formularioPintper');
	}

	function user_prop(){
		$this->view->render('home/indexPropietario');
	}
}
?>