<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

class PublicidadModel extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	function addPublicidad($publicidad){
		//echo var_dump($publicidad);
	}


}

?>