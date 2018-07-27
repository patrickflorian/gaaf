<?php
 class Exercice {
	private $idExercice;
	function __construct($idExercice){
		$this->$idExercice=$idExercice;
	}

	public function getIdExercice(){
		return $this->idExercice;
	}

	public function setIdExercice($idExercice){
		$this->idExercice=$idExercice;
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