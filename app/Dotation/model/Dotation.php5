<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 11:15
 */
class Dotation
{
    private $idDotation;
    private $valeur;

    /**
     * Dotation constructor.
     * @param $idDotation
     * @param $valeur
     */
    public function __construct($idDotation, $valeur)
    {
        $this->idDotation = $idDotation;
        $this->valeur = $valeur;
    }

    /**
     * @return mixed
     */
    public function getIdDotation()
    {
        return $this->idDotation;
    }

    /**
     * @param mixed $idDotation
     */
    public function setIdDotation($idDotation)
    {
        $this->idDotation = $idDotation;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param mixed $valeur
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }


}