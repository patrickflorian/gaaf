<?php 
class Beneficiaire{
	private $idBeneficiaire;
	private $nom;
    function __construct($idBeneficiaire,$nom){
    	$this->idBeneficiaire=$idBeneficiaire;
    	$this->nom=$nom;

    }

    public function getIdBeneficiaire(){
    	return $this->idBeneficiaire;
    }
    public function setIdBeneficiaire($idBeneficiaire){
    	$this->idBeneficiaire=$idBeneficiaire;
    }

    public function getNom(){
    	return $this->nom;
    } 
    public function setNom($nom){
    	$this->nom=$nom;
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
?>