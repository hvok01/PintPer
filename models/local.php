<?php
class Local{
	private $localId;
	private $nombre;
	private $direccion;
	private $latitud;
	private $longitud;	
	private $telefono;
	private $horario;
	private $twitter;
	private $facebook;
	private $instagram;
	private $propietarioId;
	
	public function __construct(){
	}
		
	public function __destruct(){
	}

	public function getLocalId(){
		return $this->localId;
	}

	public function setLocalId($localId){
		$this->localId=$localId;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion=$direccion;
	}

	public function getLatitud(){
		return $this->latitud;
	}

	public function setLatitud($latitud){
		$this->latitud=$latitud;
	}

	public function getLongitud(){
		return $this->longitud;
	}

	public function setLongitud($longitud){
		$this->longitud=$longitud;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono=$telefono;
	}

	public function getHorario(){
		return $this->horario;
	}

	public function setHorario($horario){
		$this->horario=$horario;
	}

	public function getTwitter(){
		return $this->twitter;
	}

	public function setTwitter($twitter){
		$this->twitter=$twitter;
	}

	public function getFacebook(){
		return $this->facebook;
	}

	public function setFacebook($facebook){
		$this->facebook=$facebook;
	}

	public function getInstagram(){
		return $this->instagram;
	}

	public function setInstagram($instagram){
		$this->instagram=$instagram;
	}

	public function getPropietarioId(){
		return $this->propietarioId;
	}

	public function setPropietarioId($propietarioId){
		$this->propietarioId=$propietarioId;
	}

}
?>