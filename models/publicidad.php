<?php
class Publicidad{
	private $publicacionId;
	private $titulo;
	private $texto;
	private $imagen;
	private $fecha;
	private $estado;
	private $propietarioId;


	public function __construct(){
	}
		
	public function __destruct(){
	}

	public function getPublicacionid(){
		return $this->publicacionId;
	}

	public function setPublicacionId($publicacionId){
		$this->publicacionId=$publicacionId;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($titulo){
		$this->titulo=$titulo;
	}

	public function getTexto(){
		return $this->texto;
	}

	public function setTexto($texto){
		$this->texto=$texto;
	}

	public function getImagen(){
		return $this->imagen;
	}

	public function setImagen($imagen){
		$this->imagen=$imagen;
	}
	
	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha=$fecha;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado=$estado;
	}

	public function getPropietarioId(){
		return $this->propietarioId;
	}

	public function setPropietarioId($propietarioId){
		$this->propietarioId=$propietarioId;
	}
}
?>