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

	
	function guardarPromocion($promocion){
		$cone         =$this->db->conect();
		$propietarioId=$_SESSION['usuario_registrado']->PropietarioId;		
		$imagen       =$promocion->getImagen();
		$fecha        =date("yy-m-d");
		$carpeta      =$_SERVER['DOCUMENT_ROOT'].'/proyecto/PintPer/public/imagenes-usuarios/promociones/';
		
		$sql          ="SELECT * FROM promociones WHERE PropietarioId=?;";
		$resultado    =$cone->prepare($sql);
		$resultado->execute(array($propietarioId));

		if($registro=$resultado->fetch(PDO::FETCH_OBJ)){
			$resultado->closeCursor();
			$resultado=null;
			$cone     =null;			
		}

		if($registro==null){
			$cone=$this->db->conect();

			$sql="INSERT INTO promociones (Imagen, Fecha, PropietarioId) VALUES (?,?,?);";
			
			$resultado=$cone->prepare($sql);
			$resultado->bindParam(1, $imagen);
			$resultado->bindParam(2, $fecha);			
			$resultado->bindParam(3, $propietarioId);			
			
			$resultado->execute();
			$resultado->closeCursor();
			$resultado=null;
			$con      =null;
			return true;			
		}else{
			$cone=$this->db->conect();
			//Eliminamos la imagen de la publicidad anterior.
			unlink($carpeta.$registro->Imagen);
			$sql="UPDATE promociones SET Imagen=?, Fecha=? WHERE PropietarioId=?;";
			
			$resultado=$cone->prepare($sql);
			$resultado->bindParam(1, $imagen);
			$resultado->bindParam(2, $fecha);
			$resultado->bindParam(3, $propietarioId);			
			
			$resultado->execute();
			$resultado->closeCursor();
			$resultado=null;
			$con      =null;
			return true;
		}


	}

	function allPromociones(){
		$cone       =$this->db->conect();
		$promociones=array();		
		$sql        ="SELECT * FROM promociones";		
		$resultado  =$cone->prepare($sql);
		$resultado->execute();

		while ($registro=$resultado->fetch(PDO::FETCH_OBJ)) {
			array_push($promociones, $registro);
		}
		$resultado->closeCursor();
		$resultado=null;
		$cone     =null;
		return $promociones;
	}

}

?>