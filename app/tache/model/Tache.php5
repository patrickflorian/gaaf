<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 11:01
 */
class Tache
{
    private $idTache;
    private $libelleTache;

    /**
     * Tache constructor.
     * @param $idTache
     * @param $libelleTache
     */
    public function __construct($idTache, $libelleTache)
    {
        $this->idTache = $idTache;
        $this->libelleTache = $libelleTache;
    }

    public static function create($libelle){
        return new Tache(-1,$libelle);
    }

    /**
     * @return mixed
     */
    public function getIdTache()
    {
        return $this->idTache;
    }

    /**
     * @param mixed $idTache
     */
    public function setIdTache($idTache)
    {
        $this->idTache = $idTache;
    }

    /**
     * @return mixed
     */
    public function getLibelleTache()
    {
        return $this->libelleTache;
    }

    /**
     * @param mixed $libelleTache
     */
    public function setLibelleTache($libelleTache)
    {
        $this->libelleTache = $libelleTache;
    }

}