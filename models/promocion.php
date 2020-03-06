<?php

class Promocion
{
	private $promocionId;
	private $imagen;
	private $propietarioId;
	
	public function __construct(){}
	public function __destruct(){}

	public function setPromocionId($promocionId){
		$this->promocionId=$promocionId;
	}

	public function getPromocionId(){
		return $this->promocionId;
	}

	public function setImagen($imagen){
		$this->imagen=$imagen;
	}

	public function getImagen(){
		return $this->imagen;
	}

	public function setPropietarioId($localId){
		$this->localId=$localId;
	}

	public function getPropietarioId(){
		return $this->localId;
	}

}