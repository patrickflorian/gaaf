<?php
 class Objet {
	private $idObjet;
	private $description;
	function __construct($idObjet,$description){
		$this->$idObjet=$idObjet;
		$this->$description=$description;
	}

	public function getIdObjet(){
		return $this->idObjet;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setIdObjet($idObjet){
		$this->idObjet=$idObjet;
	}

	public function setDescription($description){
		$this->description=$description;
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