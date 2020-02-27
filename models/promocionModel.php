<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include_once('promocion.php');
class promocionModel extends Model{
	
	public function __construct(){
		parent::__construct();
		$this->id_p="";
	}

	
	function guardarPromocion(){

	}

}

?>