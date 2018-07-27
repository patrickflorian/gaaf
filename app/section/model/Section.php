 <?php
 class Section {
 	private $codeSection;
 	function __construct($codeSection){
 		$this->codeSection=$codeSection;
 	}
 	public function getCodeSection(){
 		return $this->codeSection;
 	}
 	public function setCodeSection($codeSection){
 		$this->codeSection=$codeSection;
 	}

 	//fonction pour initialiser les attributs à partir d'un tableau associatif
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