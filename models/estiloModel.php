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
		$cone=$this->db->conect();

		$nombre      = $estilo->getNombre();
		$tipo        = $estilo->getTipo();
		$descripcion = $estilo->getDescripcion();
		$imagen      = $estilo->getImagen();
		$idlocal     = $estilo->getLocalId();

		$sql="INSERT INTO cervezas (Nombre, Tipo, Descripcion, Imagen, LocalId) 
		VALUES (?,?,?,?,?);";
		
		$resultado=$cone->prepare($sql);
		$resultado->bindParam(1, $nombre);
		$resultado->bindParam(2, $tipo);
		$resultado->bindParam(3, $descripcion);
		$resultado->bindParam(4, $imagen);
		$resultado->bindParam(5, $idlocal);
				
		$resultado->execute();
		$resultado->closeCursor();
		$resultado=null;
		$con=null;
		return true;
	}


	function comprobarLocales(){//Revisar esta funcion
		
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

	function allEstilos(){
		$cone=$this->db->conect();
		$estilo=array();
		$propietarioId=$_SESSION['usuario_registrado']->PropietarioId;
		
		$sql="SELECT c.CervezaId, c.Nombre, c.Tipo, c.Descripcion, c.Imagen FROM cervezas c JOIN locales l ON (c.LocalId=l.LocalId) WHERE l.PropietarioId= ?";
		
		$resultado=$cone->prepare($sql);
		$resultado->execute(array($propietarioId));

		while ($registro=$resultado->fetch(PDO::FETCH_OBJ)) {
			array_push($estilo, $registro);
		}
		$resultado->closeCursor();
		$resultado=null;
		$cone=null;
		return $estilo;
	}

	function getLocal($id){//Revisar esta funcion
		
		$cone=$this->db->conect();
		$propietarioId=$_SESSION['usuario_registrado']->PropietarioId;
		
		$sql="SELECT LocalId, Nombre FROM locales WHERE LocalId=? AND PropietarioId=?;";
		
		$resultado=$cone->prepare($sql);
		$resultado->bindParam(1, $id);
		$resultado->bindParam(2, $propietarioId);
		$resultado->execute();

		if($registro=$resultado->fetch(PDO::FETCH_OBJ)){
			$resultado->closeCursor();
			$resultado=null;
			$cone=null;
			return $registro;			
		}else{
			return null;
		}
	}

	function getEstilo($id){
		$cone=$this->db->conect();
				
		$sql="SELECT * FROM cervezas WHERE CervezaId= ?";
		
		$resultado=$cone->prepare($sql);
		$resultado->execute(array($id));

		if ($registro=$resultado->fetch(PDO::FETCH_OBJ)) {
			$resultado->closeCursor();
			$resultado=null;
			$cone=null;
			return $registro;
		}
		$resultado->closeCursor();
		$resultado=null;
		$cone=null;
		return null;
	}

	function modificarEstilo(){
		
		$cone=$this->db->conect();

		$nombre      = $estilo->getNombre();
		$tipo        = $estilo->getTipo();
		$descripcion = $estilo->getDescripcion();
		$imagen      = $estilo->getImagen();
		$idcerveza     = $estilo->getCervezId();

		$sql="UPDATE cervezas SET Nombre=?, Tipo=?, Descripcion=?, Imagen=? WHERE CervezaId=?;";
		
		$resultado=$cone->prepare($sql);
		$resultado->bindParam(1, $nombre);
		$resultado->bindParam(2, $tipo);
		$resultado->bindParam(3, $descripcion);
		$resultado->bindParam(4, $imagen);
		$resultado->bindParam(5, $idcerveza);
				
		$resultado->execute();
		$resultado->closeCursor();
		$resultado=null;
		$con=null;
		return true;		
	}	

}

?>