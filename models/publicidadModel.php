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
		$cone         =$this->db->conect();
		$propietarioId=$_SESSION['usuario_registrado']->PropietarioId;
		$titulo       =$publicidad->getTitulo();
		$texto        =$publicidad->getTexto();
		$imagen       =$publicidad->getImagen();
		$fecha        =date("yy-m-d");
		$estado       =true;
		$carpeta      =$_SERVER['DOCUMENT_ROOT'].'/proyecto/PintPer/public/imagenes-usuarios/publicidad/';
		
		$sql="SELECT * FROM publicidad WHERE PropietarioId=?;";
		$resultado=$cone->prepare($sql);
		$resultado->execute(array($propietarioId));

		if($registro=$resultado->fetch(PDO::FETCH_OBJ)){
			$resultado->closeCursor();
			$resultado=null;
			$cone     =null;			
		}

		if($registro==null){
			$cone=$this->db->conect();

			$sql="INSERT INTO publicidad (Titulo, Texto, Imagen, Fecha, Estado, PropietarioId) 
			VALUES (?,?,?,?,?,?);";
			
			$resultado=$cone->prepare($sql);
			$resultado->bindParam(1, $titulo);
			$resultado->bindParam(2, $texto);
			$resultado->bindParam(3, $imagen);
			$resultado->bindParam(4, $fecha);
			$resultado->bindParam(5, $estado);
			$resultado->bindParam(6, $propietarioId);			
			
			$resultado->execute();
			$resultado->closeCursor();
			$resultado=null;
			$con      =null;
			return true;			
		}else{
			$cone=$this->db->conect();
			//Eliminamos la imagen de la publicidad anterior.
			unlink($carpeta.$registro->Imagen);
			$sql="UPDATE publicidad SET Titulo=?, Texto=?, Imagen=?, Fecha=?, Estado=? WHERE PropietarioId=?;";
			
			$resultado=$cone->prepare($sql);
			$resultado->bindParam(1, $titulo);
			$resultado->bindParam(2, $texto);
			$resultado->bindParam(3, $imagen);
			$resultado->bindParam(4, $fecha);
			$resultado->bindParam(5, $estado);
			$resultado->bindParam(6, $propietarioId);			
			
			$resultado->execute();
			$resultado->closeCursor();
			$resultado=null;
			$con      =null;
			return true;
		}
	}	
}
?>