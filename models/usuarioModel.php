<?php
include_once('usuario.php');
class UsuarioModel extends Model{
	
	public function __construct(){
		parent::__construct();
		$this->id_p="";
	}

	function resgistrarUsuario($user){
		$cone  =$this->db->conect();
		$nick  =$user->getNickName();
		$correo=$user->getCorreo();
		$clave =$user->getClave();
		$estado=$user->getEstado();
		
		$sql   ="INSERT INTO usuarios (NickName,Correo,Clave,Estado) VALUES (?,?,?,?)";
		
		$resultado=$cone->prepare($sql);
		$resultado->bindParam(1, $nick);
		$resultado->bindParam(2, $correo);
		$resultado->bindParam(3, $clave);
		$resultado->bindParam(4, $estado);
		
		$resultado->execute();
		$resultado->closeCursor();
		$resultado=null;
		$con      =null;
		return true;
	}

	function loginUser($correo){

		$cone     =$this->db->conect();
		$sql      ="SELECT * FROM usuarios WHERE Correo=?;";
		$resultado=$cone->prepare($sql);
		$resultado->execute(array($correo));
		if($registro=$resultado->fetch(PDO::FETCH_OBJ)){
			$resultado->closeCursor();
			$resultado=null;
			$cone     =null;
			return $registro;	
		}else{
			return null;
		}		
		
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