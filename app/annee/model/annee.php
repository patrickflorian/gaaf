<?php
 class Annee {
	private $annee;
	function __construct($annee){
		$this->$annee=$annee;
	}

	public function getAnnee(){
		return $this->annee;
	}

	public function setAnnee($annee){
		$this->annee=$annee;
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