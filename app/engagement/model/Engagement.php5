<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 11:36
 */
class Engagement
{
    private $idEngagement;
    private $dateEngagement;
    private $montant;
    private $observation;

    /**
     * Engagement constructor.
     * @param $idEngagement
     * @param $dateEngagement
     * @param $montant
     * @param $observation
     */
    public function __construct($idEngagement, $dateEngagement, $montant, $observation)
    {
        $this->idEngagement = $idEngagement;
        $this->dateEngagement = $dateEngagement;
        $this->montant = $montant;
        $this->observation = $observation;
    }

    /**
     * @return mixed
     */
    public function getIdEngagement()
    {
        return $this->idEngagement;
    }

    /**
     * @param mixed $idEngagement
     */
    public function setIdEngagement($idEngagement)
    {
        $this->idEngagement = $idEngagement;
    }

    /**
     * @return mixed
     */
    public function getDateEngagement()
    {
        return $this->dateEngagement;
    }

    /**
     * @param mixed $dateEngagement
     */
    public function setDateEngagement($dateEngagement)
    {
        $this->dateEngagement = $dateEngagement;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * @param mixed $observation
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
    }




}