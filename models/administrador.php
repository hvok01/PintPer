<?php
class Administrador {
	private $administradorId;	
	private $correo;
	private $clave;
	private $estado;
		
	public function __construct(){
	}
		
	public function __destruct(){
	}
		
	public function getAdministradorId(){
		return $this->administradorId;
	}
	public function setAdministradorId($administradorId){
		$this->administradorId=$administradorId;
	}

	public function getCorreo(){
		return $this->correo;
	}
	public function setCorreo($correo){
		$this->correo=$correo;
	}
	
	public function getClave(){
		return $this->clave;
	}
	public function setClave($clave){
		$this->clave=$clave;
	}

	public function getEstado(){
		return $this->estado;
	}
	public function setEstado($estado){
		$this->estado=$estado;
	}
}
?>