<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 11:36
 */
class EngagementManager
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

    public function insert(Engagement $eng,$idBen,$idTache,$idObjet){
        $q=$this->db->prepare( "INSERT INTO engagement(dateEngagement, montant, observation, idBeneficiaire, idTache, idObjet) 
                                          VALUES (:dateEng,:montant,:observation,:idBen,:idTache,:idObjet)");
        $q->bindValue(':montant',$eng->getMontant());
        $q->bindValue(':dateEng',$eng->getDateEngagement());
        $q->bindValue(':observation',$eng->getObservation());
        $q->bindValue(':idBen',$idBen);
        $q->bindValue(':idTache',$idTache);
        $q->bindValue(':idObjet',$idObjet);
        $q->execute();
        $eng->setIdEngagement($this->db->lastInsertId());
    }
    public function update(Engagement $eng,$idBen,$idTache,$idObjet){
        $q=$this->db->prepare("UPDATE engagement 
                                            SET montant=:montant,
                                              dateEngagement=:dateEng,
                                              observation=:observation,idTache=:idTache,idBeneficiaire=:idBen,idObjet=:idObjet
                                            WHERE idEngagement =:idEng ");
        $q->bindValue(':idEng',$eng->getIdEngagement());
        $q->bindValue(':montant',$eng->getMontant());
        $q->bindValue(':dateEng',$eng->getDateEngagement());
        $q->bindValue(':observation',$eng->getObservation());
        $q->bindValue(':idBen',$idBen);
        $q->bindValue(':idTache',$idTache);
        $q->bindValue(':idObjet',$idObjet);
        return $q->execute();
    }
    public function delete($idEngagement){
        $this->db->exec("DELETE FROM engagement WHERE idEngagement='$idEngagement' ");
    }
    public function count()
    {
        return $this->db->query('SELECT COUNT(*) FROM engagement')->fetchColumn();
    }

    public function select($debut=-1,$limit=-1,$condition=""){
        $list=array();
        $sql = "SELECT * from engagement";
        if($condition!=""){
            $sql.=" WHERE $condition ";
        }
        if($debut!=-1 || $limit!=-1){
            $sql.= " LIMIT ".(int)$limit . " OFFSET " . (int)$debut;
        }
        $req = $this->db->query($sql);
        while($eng =  $req->fetch(PDO::FETCH_ASSOC)){
            $list[] = new Engagement($eng['idEngagement'],$eng['dateEngagement'],$eng['montant'],$eng['observation']);
        }
        $req->closeCursor();
        return $list;
    }

}