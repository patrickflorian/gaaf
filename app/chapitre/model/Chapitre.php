<?php
/**
 * Description
 * @authors Your Name (you@example.org)
 * @date    2018-07-26 12:52:40
 * @version 1.0.0
 */

class Chapitre  {
    private $codeChapitre;
    function __construct($code){
        $this->codeChapitre=$code;
    }

    public function hydrate($data){
        foreach($data AS $key=>$value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
               $this->$method ($value); 
            }  
        }
   } 

    public function getCodeChapitre(){
        return $this->codeChapitre;
    }
    public function setCodeChapitre($code){
        $this->codeChapitre = $code;
    }
}