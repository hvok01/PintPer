<?php
class Usuario {
	private $usuarioId;
	private $nickName;
	private $correo;
	private $clave;
	private $estado;
		
	public function __construct(){
	}
		
	public function __destruct(){
	}
		
	public function getUsuarioId(){
		return $this->usuarioId;
	}
	public function setUsuarioId($usuarioId){
		$this->usuarioId=$usuarioId;
	}

	public function getNickName(){
		return $this->nickName;
	}
	public function setNickName($nickName){
		$this->nickName=$nickName;
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