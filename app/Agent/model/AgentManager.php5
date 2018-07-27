<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 12:08
 */
class AgentManager
{
    protected  $db;

    /**
     * ParagrapheManager constructor.
     * @param $db
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }

    public function insert(Agent $agent){
        $q=$this->db->prepare( "INSERT INTO agent(nomAgent, poste) 
                                          VALUES (:nomAgent,:poste)");
        $q->bindValue(':nomAgent',$agent->getNomAgent());
        $q->bindValue(':poste',$agent->getPoste());
        $q->execute();
        $agent->setIdAgent($this->db->lastInsertId());
    }
    public function update(Agent $agent){
        $q=$this->db->prepare("UPDATE agent 
                                            SET nomAgent=:nomAgent,poste=:poste
                                            WHERE idAgent =:idAgent");
        $q->bindValue(':idAgent',$agent->getIdAgent());
        $q->bindValue(':nomAgent',$agent->getNomAgent());
        $q->bindValue(':poste',$agent->getPoste());
        return $q->execute();
    }
    public function delete($idAgent){
        $this->db->exec("DELETE FROM Agent WHERE idAgent='$idAgent' ");
    }
    public function count()
    {
        return $this->db->query('SELECT COUNT(*) FROM Agent')->fetchColumn();
    }

    public function select($debut=-1,$limit=-1,$condition=""){
        $list=array();
        $sql = "SELECT * from Agent";
        if($condition!=""){
            $sql.=" WHERE $condition ";
        }
        if($debut!=-1 || $limit!=-1){
            $sql.= " LIMIT ".(int)$limit . " OFFSET " . (int)$debut;
        }
        $req = $this->db->query($sql);
        while($agent =  $req->fetch(PDO::FETCH_ASSOC)){
            $list[] = new Agent($agent['idAgent'],$agent['nomAgent'],$agent['poste']);
        }
        $req->closeCursor();
        return $list;
    }
}