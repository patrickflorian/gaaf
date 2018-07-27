<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 12:16
 */
class Art
{
    private $codeArt;

    /**
     * Art constructor.
     * @param $codeArt
     */
    public function __construct($codeArt)
    {
        $this->codeArt = $codeArt;
    }

    /**
     * @return mixed
     */
    public function getCodeArt()
    {
        return $this->codeArt;
    }

    /**
     * @param mixed $codeArt
     */
    public function setCodeArt($codeArt)
    {
        $this->codeArt = $codeArt;
    }


}