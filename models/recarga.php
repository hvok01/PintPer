<?php
class Recarga {
	private $recargaId;
	private $envase;
	private $medida;
	private $localId;
		
	public function __construct(){
	}
		
	public function __destruct(){
	}

	public function getRecargaId(){
		return $this->recargaId;
	}
	public function setRecargaId($recargaId){
		$this->recargaId=$recargaId;
	}

	public function getEnvase(){
		return $this->envase;
	}
	public function setEnvase($envase){
		$this->envase=$envase;
	}

	public function getMedida(){
		return $this->medida;
	}
	public function setMedida($medida){
		$this->medida=$medida;
	}

	public function getLocalId(){
		return $this->localId;
	}
	public function setLocalId($localId){
		$this->localId=$localId;
	}
}
?>