<?php
 class Activite {
	private $codeActivite;
	private $libelleActivite;
	function __construct($codeActivite,$libelleActivite){
		$this->$codeActivite=$codeActivite;
		$this->$libelleActivite=$libelleActivite;
	}

	public function getCodeActivite(){
		return $this->codeActivite;
	}

	public function getLibelleActivite(){
		return $this->libelleActivite;
	}

	public function setCodeActivite($codeActivite){
		$this->codeActivite=$codeActivite;
	}

	public function setLibelleActivite($libelleActivite){
		$this->libelleActivite=$libelleActivite;
	}

	public function hydrate($data){
 		foreach($data AS $key=>$value){
 			$method='set'.ucfirst($key);
 			if(method_exists($this, $method)){
 				$this->$method($value);
 			}
 		}
 	}

}