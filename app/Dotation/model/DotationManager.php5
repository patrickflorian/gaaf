<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 11:17
 */
class DotationManager
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

    public function insert(Dotation $dot,$idExercice,$idTache){
        $q=$this->db->prepare( "INSERT INTO dotation(idTache, idExercice, valeur) 
                                              VALUES (:idTache,:idExercice,:valeur)");
        $q->bindValue(':valeur',$dot->getValeur());
        $q->bindValue(':idTache',$idTache);
        $q->bindValue(':idExercice',$idExercice);
        $q->execute();

        $dot->setIdDotation($this->db->lastInsertId());
    }
    public function update(Dotation $dot,$newValeur){
        $q=$this->db->prepare("UPDATE dotation SET valeur=:new WHERE idDotation =:code ");
        $q->bindValue(':code',$dot->getIdDotation());
        $q->bindValue(':new',$newValeur);
        $q->execute();

        $dot->setValeur($newValeur);
    }
    public function delete($idDotation){
        $this->db->exec("DELETE FROM dotation WHERE idDotation='$idDotation' ");
    }
    public function count()
    {
        return $this->db->query('SELECT COUNT(*) FROM dotation')->fetchColumn();
    }

    public function select($debut=-1,$limit=-1,$condition=""){
        $list=array();
        $sql = "SELECT * from dotation";
        if($condition!=""){
            $sql.=" WHERE $condition ";
        }
        if($debut!=-1 || $limit!=-1){
            $sql.= " LIMIT ".(int)$limit . " OFFSET " . (int)$debut;
        }
        $req = $this->db->query($sql);
        while($dot =  $req->fetch(PDO::FETCH_ASSOC)){
            $list[] = new Dotation($dot['idDotation'],$dot['valeur']);
        }
        $req->closeCursor();
        return $list;
    }
}