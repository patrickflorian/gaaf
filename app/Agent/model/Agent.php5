<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 12:07
 */
class Agent
{
    private $idAgent;
    private $nomAgent;
    private $poste;

    /**
     * Agent constructor.
     * @param $idAgent
     * @param $nomAgent
     * @param $poste
     */
    public function __construct($idAgent, $nomAgent, $poste)
    {
        $this->idAgent = $idAgent;
        $this->nomAgent = $nomAgent;
        $this->poste = $poste;
    }

    /**
     * @return mixed
     */
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * @param mixed $idAgent
     */
    public function setIdAgent($idAgent)
    {
        $this->idAgent = $idAgent;
    }

    /**
     * @return mixed
     */
    public function getNomAgent()
    {
        return $this->nomAgent;
    }

    /**
     * @param mixed $nomAgent
     */
    public function setNomAgent($nomAgent)
    {
        $this->nomAgent = $nomAgent;
    }

    /**
     * @return mixed
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param mixed $poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    }




}