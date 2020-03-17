<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

class HomeModel extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	function loadPublicidad(){
		$publicidad=array();
		$cone      =$this->db->conect();
		$sql       ="SELECT * FROM publicidad;";
		$resultado =$cone->prepare($sql);

		$resultado->execute();
		while ($registro=$resultado->fetch(PDO::FETCH_OBJ)){		
			array_push($publicidad, $registro);
		}
		$resultado->closeCursor();
		$resultado=null;
		$cone     =null;
		return $publicidad;		
	}
}

?>