<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

class EstiloModel extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	function addEstilo($estilo){
		echo $estilo->getNombre().'<br>';
		echo $estilo->getTipo().'<br>';
		echo $estilo->getDescripcion().'<br>';
		echo $estilo->getImagen().'<br>';
	}


	function comprobarLocales(){
		
		$cone=$this->db->conect();
		$propietarioId=$_SESSION['usuario_registrado']->PropietarioId;
		
		$sql="SELECT * FROM locales WHERE PropietarioId=?;";
		
		$resultado=$cone->prepare($sql);
		$resultado->execute(array($propietarioId));

		if($registro=$resultado->fetch(PDO::FETCH_OBJ)){
			$resultado->closeCursor();
			$resultado=null;
			$cone=null;
			return true;			
		}else{
			return null;
		}
	}

}

?>