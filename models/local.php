<?php
class Local{
	private $localId;
	private $nombre;
	private $direccion;
	private $latitud;
	private $longitud;	
	private $telefono;
	private $imagen;
	private $propietarioId;
	
	public function __construct(){
	}
		
	public function __destruct(){
	}

	public function getLocalId(){
		return this->localId;
	}

	public function setLocalId($localId){
		this->localId=$localId;
	}

	public function getNombre(){
		return this->nombre;
	}

	public function setNombre($nombre){
		this->nombre=$nombre;
	}

	public function getDireccion(){
		return this->direccion;
	}

	public function setDireccion($direccion){
		this->direccion=$direccion;
	}

	public function getLatitud(){
		return this->latitud;
	}

	public function setLatitud($latitud){
		this->latitud=$latitud;
	}

	public function getLongitud(){
		return this->longitud;
	}

	public function setLongitud($longitud){
		this->longitud=$longitud;
	}

	public function getTelefono(){
		return this->telefono;
	}

	public function setTelefono($telefono){
		this->telefono=$telefono;
	}

	public function getImagen(){
		return this->imagen;
	}

	public function setImagen($imagen){
		this->imagen=$imagen;
	}

	public function getPropietarioId(){
		return this->propietarioId;
	}

	public function setPropietarioId($propietarioId){
		this->propietarioId=$propietarioId;
	}

}
?>