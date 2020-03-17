<?php
include_once('administrador.php');
class AdministradorModel extends Model{
	
	public function __construct(){
		parent::__construct();
		$this->id_p="";
	}

	function loginAdmin($correo){
		$cone     =$this->db->conect();
		$sql      ="SELECT * FROM administradores WHERE correo=?;";
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

	function registrarAdmin($user){
		$cone  =$this->db->conect();
		$correo=$user->getCorreo();
        $clave =$user->getClave();        
		
		$sql="INSERT INTO administradores (correo,clave) 
		VALUES (?,?);";
		
		$resultado=$cone->prepare($sql);
		$resultado->bindParam(1, $correo);
		$resultado->bindParam(2, $clave);
		
		$resultado->execute();
		$resultado->closeCursor();
		$resultado=null;
		$con      =null;
		return true;
	}
}
?>