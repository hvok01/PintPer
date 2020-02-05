<?php 
class LocalController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->user=array();
		$this->view->mensaje="";
		$this->view->id_p=0;
	}
	
	function render(){
		$this->view->render('local/verLocalUsuarioComun');
	}

	function verMas(){
		$this->view->render('local/verMasDeLocalUsuarioComun');	
	}

	function agregar(){
		$this->view->render('local/agregarLocal');		
	}

	function verMisLocales(){
		$this->view->render('local/verMisLocales');	
	}
}

?>