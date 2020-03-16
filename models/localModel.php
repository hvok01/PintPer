<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include_once('usuario.php');
class LocalModel extends Model{
	
	public function __construct(){
		parent::__construct();
		$this->id_p="";
	}

	function agregar($local){
		$cone=$this->db->conect();

		$nombre   = $local->getNombre();
		$dire     = $local->getDireccion();
		$telefono = $local->getTelefono();
		$horario  = $local->getHorario();
		$lat 	  = $local->getLatitud();
		$lon	  = $local->getLongitud();
		$twitter  = $local->getTwitter();
		$facebook = $local->getFacebook();
		$instagam = $local->getInstagram();

		$propietarioId=$_SESSION['usuario_registrado']->PropietarioId;

		$sql="INSERT INTO locales (Nombre, Direccion, Latitud, Longitud, Telefono, HorarioAtencion, Twitter, Facebook, Instagram, PropietarioId) 
		VALUES (?,?,?,?,?,?,?,?,?,?);";
		
		$resultado=$cone->prepare($sql);
		$resultado->bindParam(1, $nombre);
		$resultado->bindParam(2, $dire);
		$resultado->bindParam(3, $lat);
		$resultado->bindParam(4, $lon);		
		$resultado->bindParam(5, $telefono);
		$resultado->bindParam(6, $horario);
		$resultado->bindParam(7, $twitter);
		$resultado->bindParam(8, $facebook);
		$resultado->bindParam(9, $instagam);
		$resultado->bindParam(10, $propietarioId);
		
		$resultado->execute();
		$resultado->closeCursor();
		$resultado=null;
		$con=null;
		return true;
	}

	function listaLocales(){
		$loacles= array();
		$cone=$this->db->conect();
		$propietarioId=$_SESSION['usuario_registrado']->PropietarioId;
		$sql="SELECT * FROM locales WHERE PropietarioId=?;";
		$resultado=$cone->prepare($sql);
		$resultado->execute(array($propietarioId));
		while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
			$locales[]=$registro;			
		}
		
		if($locales!=null){
			$resultado->closeCursor();
			$resultado=null;
			$cone=null;
			return $locales;
		}else{
			return null;
		}
	}

	function getLocalId($localId){
		$cone=$this->db->conect();
		
		$propietarioId=$_SESSION['usuario_registrado']->PropietarioId;
		$sql="SELECT * FROM locales WHERE LocalId=? and PropietarioId=?;";
		$resultado=$cone->prepare($sql);
		$resultado->bindParam(1, $localId);
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

	function modificarLocal($local){
		$cone=$this->db->conect();

		$nombre  =$local->getNombre();
		$dire    =$local->getDireccion();
		$lat     =$local->getLatitud();
		$lon     =$local->getLongitud();		
		$tel     =$local->getTelefono();
		$twi     =$local->getTwitter();
		$fac     =$local->getFacebook();
		$ins     =$local->getInstagram();
		$localId =$local->getLocalId();
		$prop    =$_SESSION['usuario_registrado']->PropietarioId;

		if($local->getHorario()!=null){
			$horario=$local->getHorario();
			$sql="UPDATE locales SET Nombre=?, Direccion=?, Latitud=?, Longitud=?, Telefono=?, HorarioAtencion=?,
			 Twitter=?, Facebook=?, Instagram=? WHERE LocalId=? and PropietarioId=?;";
			
			$resultado=$cone->prepare($sql);
			$resultado->bindParam(1, $nombre);
			$resultado->bindParam(2, $dire);
			$resultado->bindParam(3, $lat);
			$resultado->bindParam(4, $lon);
			$resultado->bindParam(5, $tel);
			$resultado->bindParam(6, $horario);
			$resultado->bindParam(7, $twi);
			$resultado->bindParam(8, $fac);
			$resultado->bindParam(9, $ins);
			$resultado->bindParam(10, $localId);
			$resultado->bindParam(11, $prop);
			
			$resultado->execute();
			$resultado->closeCursor();
			$resultado=null;
			
		}else{
			$sql="UPDATE locales SET Nombre=?, Direccion=?, Latitud=?, Longitud=?, Telefono=?,
			 Twitter=?, Facebook=?, Instagram=? WHERE LocalId=? and PropietarioId=?;";
			
			$resultado=$cone->prepare($sql);
			$resultado->bindParam(1, $nombre);
			$resultado->bindParam(2, $dire);
			$resultado->bindParam(3, $lat);
			$resultado->bindParam(4, $lon);
			$resultado->bindParam(5, $tel);
			$resultado->bindParam(6, $twi);
			$resultado->bindParam(7, $fac);
			$resultado->bindParam(8, $ins);
			$resultado->bindParam(9, $localId);
			$resultado->bindParam(10, $prop);
			
			$resultado->execute();

			$resultado->closeCursor();
			$resultado=null;
		}
		
		$con=null;
		return true;		
	}

	function allLocales(){
		$loacles= array();
		$cone=$this->db->conect();		
		$sql="SELECT * FROM locales;";
		$resultado=$cone->prepare($sql);
		$resultado->execute();
		while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
			$locales[]=$registro;			
		}
		
		if($locales!=null){
			$resultado->closeCursor();
			$resultado=null;
			$cone=null;
			return $locales;
		}else{
			return null;
		}
	}

	function searchLocales($nombre){
		$loacles= array();
		$cone=$this->db->conect();		
		$sql="SELECT * FROM locales WHERE Nombre like ?;";
		$resultado=$cone->prepare($sql);
		$resultado->execute(array($nombre));
		while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
			$locales[]=$registro;			
		}
		
		if($locales!=null){
			$resultado->closeCursor();
			$resultado=null;
			$cone=null;
			return $locales;
		}else{
			return null;
		}
	}

	function localId($localId){
		$cone=$this->db->conect();		
		$sql="SELECT * FROM locales WHERE LocalId=?;";
		$resultado=$cone->prepare($sql);		
		$resultado->execute(array($localId));
		if($registro=$resultado->fetch(PDO::FETCH_OBJ)){
			$resultado->closeCursor();
			$resultado=null;
			$cone=null;
			return $registro;
		}else{
			return null;
		}			
	}
}
?>