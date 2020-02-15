<?php

class EstiloController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->user=array();
		$this->view->mensaje="";
		$this->view->id_p=0;
	}
	
	function verModuloEstilos() {
		$this->view->render('estilos/moduloVerEstilos');
	}
	
	function agregarEstilo(){
		$this->view->render('estilos/agregarEstilos');	
	}

	function verMisEstilos(){
		$this->view->render('estilos/verEstilos');
	}

	function editarEstilos(){
		$this->view->render('estilos/editarEstiloDuenio');	
	}
}

?>