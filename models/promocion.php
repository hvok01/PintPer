<?php

/**
 * 
 */
class Promocion
{
	private $promocionId;
	private $imagen;
	private $localId;
	
	public function __construct(){}
	public function __destruct(){}

	public setPromocionId($promocionId){
		$this->promocionId=$promocionId;
	}

	public getPromocionId(){
		return $this->promocionId;
	}

	public setImagen($imagen){
		$this->imagen=$imagen;
	}

	public getPromocionId(){
		return $this->imagen;
	}

	public setLocalId($localId){
		$this->localId=$localId;
	}

	public getLocalId(){
		return $this->localId;
	}

}