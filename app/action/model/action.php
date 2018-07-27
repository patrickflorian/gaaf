<?php
 class Action {
	private $idAction;
	private $libelleAction;
	function __construct($idAction,$libelleAction){
		$this->$idAction=$idAction;
		$this->$libelleAction=$libelleAction;
	}

	public function getIdAction(){
		return $this->idAction;
	}

	public function getLibelleAction(){
		return $this->libelleAction;
	}

	public function setIdAction($idAction){
		$this->idAction=$idAction;
	}

	public function setLibelleAction($libelleAction){
		$this->libelleAction=$libelleAction;
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