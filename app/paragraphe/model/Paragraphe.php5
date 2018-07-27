<?php
/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 10:39
 */

class Paragraphe
{
    private $idParagraphe;
    private $codeParagraphe;

    /**
     * Paragraphe constructor.
     * @param $idParagraphe
     * @param $codeParagraphe
     */
    public function __construct($idParagraphe, $codeParagraphe)
    {
        $this->idParagraphe = $idParagraphe;
        $this->codeParagraphe = $codeParagraphe;
    }

    public static function create($codeParagraphe){
        return new Paragraphe(-1,$codeParagraphe);
    }

    public function hydrate($data){
        foreach($data AS $key=>$value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method ($value);
            }
        }
    }
    
    /**
     * @return mixed
     */
    public function getIdParagraphe()
    {
        return $this->idParagraphe;
    }

    /**
     * @param mixed $idParagraphe
     */
    public function setIdParagraphe($idParagraphe)
    {
        $this->idParagraphe = $idParagraphe;
    }

    /**
     * @return mixed
     */
    public function getCodeParagraphe()
    {
        return $this->codeParagraphe;
    }

    /**
     * @param mixed $codeParagraphe
     */
    public function setCodeParagraphe($codeParagraphe)
    {
        $this->codeParagraphe = $codeParagraphe;
    }

}