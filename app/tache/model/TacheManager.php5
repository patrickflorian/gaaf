<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 11:04
 */
class TacheManager
{
    private $db;

    /**
     * TacheManager constructor.
     * @param $db
     */
    public function __construct($db)
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
    public function insert(Tache $tache){
        $q=$this->db->prepare( "INSERT INTO tache(libelleTache) VALUES (:libelle)");
        $q->bindValue(':libelle',$tache->getLibelleTache());
        $q->execute();

        $tache->setIdTache($this->db->lastInsertId());
    }
    public function update(Tache $tache,$newLibelleTache){
        $q=$this->db->prepare("UPDATE tache SET libelleTache=:new WHERE idTache =:id ");
        $q->bindValue(':id',$tache->getIdTache());
        $q->bindValue(':new',$newLibelleTache);
        $q->execute();

        $tache->setLibelleTache($newLibelleTache);
    }
    public function delete($idTache){
        $this->db->exec("DELETE FROM tache WHERE idTache='$idTache' ");
    }
    public function count()
    {
        return $this->db->query('SELECT COUNT(*) FROM tache')->fetchColumn();
    }

    public function select($debut=-1,$limit=-1,$condition=""){
        $list=array();
        $sql = "SELECT * from tache";
        if($condition!=""){
            $sql.=" WHERE ". $condition ;
        }
        if($debut!=-1 || $limit!=-1){
            $sql.= " LIMIT ".(int)$limit . " OFFSET " . (int)$debut;
        }
        $req = $this->db->query($sql);
        while($tache =  $req->fetch(PDO::FETCH_ASSOC)){
            $list[] = new Tache($tache['idTache'],$tache['libelleTache']);
        }

        $req->closeCursor();
        return $list;
    }
}