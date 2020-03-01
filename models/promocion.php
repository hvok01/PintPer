<?php

class Promocion
{
	private $promocionId;
	private $imagen;
	private $localId;
	
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

	public function setLocalId($localId){
		$this->localId=$localId;
	}

	public function getLocalId(){
		return $this->localId;
	}

}