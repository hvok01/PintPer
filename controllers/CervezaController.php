<?php

class CervezaController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->user=array();
		$this->view->mensaje="";
		$this->view->id_p=0;
	}
	
	function render(){
		$this->view->render('index');
	}
}

?>