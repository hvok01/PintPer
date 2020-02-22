<?php
class Cerveza {
	private $cervezaId;
	private $nombre;
	private $tipo;
	private $descripcion;
	private $imagen;
	private $localId;
	
	public function __construct(){
	}
		
	public function __destruct(){
	}

	public function getCervezaId(){
		return $this->cervezaId;
	}

	public function setCervezaId($cervezaId){
		$this->cervezaId=$cervezaId;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tipo){
		$this->tipo=$tipo;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion=$descripcion;
	}

	public function getImagen(){
		return $this->imagen;
	}

	public function setImagen($imagen){
		$this->imagen=$imagen;
	}	

	public function getLocalId(){
		return $this->localId;
	}

	public function setLocalId($localId){
		$this->localId=$localId;
	}
}

?>