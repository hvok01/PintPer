<?php
include_once('propietario.php');
class PropietarioModel extends Model{
	
	public function __construct(){
		parent::__construct();
		$this->id_p="";
	}

	function loginProp($correo){
		$cone=$this->db->conect();
		$sql="SELECT * FROM propietarios WHERE Correo=?;";
		$resultado=$cone->prepare($sql);
		$resultado->execute(array($correo));
		if($registro=$resultado->fetch(PDO::FETCH_OBJ)){
			$resultado->closeCursor();
			$resultado=null;
			$cone=null;			
			return $registro;
		}else{
			return null;
		}		
	}

	function registrarProp($user){
		$cone=$this->db->conect();

		$nombre=$user->getNombre();
		$apellido=$user->getApellido();
		$dni=$user->getDni();
		$correo=$user->getCorreo();
		$clave=$user->getClave();
		$estado=$user->getEstado();		
		$provincia=$user->getProvincia();

		$sql="INSERT INTO propietarios (Nombre,Apellido,Dni,Correo,Clave,Estado,Provincia) 
		VALUES (?,?,?,?,?,?,?);";
		
		$resultado=$cone->prepare($sql);
		$resultado->bindParam(1, $nombre);
		$resultado->bindParam(2, $apellido);
		$resultado->bindParam(3, $dni);
		$resultado->bindParam(4, $correo);
		$resultado->bindParam(5, $clave);
		$resultado->bindParam(6, $estado);		
		$resultado->bindParam(7, $provincia);
		
		$resultado->execute();
		$resultado->closeCursor();
		$resultado=null;
		$con=null;
		return true;
	}

}

?>