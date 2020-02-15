<?php
class Propietario {
	private $propietarioId;
	private $nombre;
	private $apellido;
	private $dni;
	private $correo;
	private $clave;
	private $estado;
	private $provinciaId;
		
	public function __construct(){
	}
		
	public function __destruct(){
	}
		
	public function getPropietarioId(){
		return $this->propietarioId;
	}
	public function setPropietarioId($propietarioId){
		$this->propietarioId=$propietarioId;
	}

	public function getNombre(){
		return $this->nombre;
	}
	
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}
	public function setApellido($apellido){
		$this->apellido=$apellido;
	}

	public function getDni(){
		return $this->dni;
	}
	public function setDni($dni){
		$this->dni=$dni;
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

	public function getProvinciaId(){
		return $this->provinciaId;
	}
	public function setProvinciaId($provinciaId){
		$this->provinciaId=$provinciaId;
	}
}

?>