<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 12:16
 */
class ArtManager
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

    public function insert(Art $Art,$codeChapitre){
        $q=$this->db->prepare( "INSERT INTO Art(codeArt, codeChapitre) 
                                          VALUES (:codeArt,:codeChap)");
        $q->bindValue(':codeArt',$Art->getCodeArt());
        $q->bindValue(':codeChap',$codeChapitre);
        $q->execute();
        $Art->setCodeArt($this->db->lastInsertId());
    }
    public function update(Art $Art,$codeChapitre,$newCodeArt){
        $q=$this->db->prepare("UPDATE Art 
                                            SET codeArt=:new,codeChapitre=:codeChap
                                            WHERE codeArt =:codeArt");
        $q->bindValue(':codeArt',$Art->getCodeArt());
        $q->bindValue(':new',$newCodeArt);
        $q->bindValue(':codeChap',$codeChapitre);
        return $q->execute();
    }
    public function delete($codeArt){
        $this->db->exec("DELETE FROM Art WHERE codeArt='$codeArt' ");
    }
    public function count()
    {
        return $this->db->query('SELECT COUNT(*) FROM Art')->fetchColumn();
    }

    public function select($debut=-1,$limit=-1,$condition=""){
        $list=array();
        $sql = "SELECT * from Art";
        if($condition!=""){
            $sql.=" WHERE $condition ";
        }
        if($debut!=-1 || $limit!=-1){
            $sql.= " LIMIT ".(int)$limit . " OFFSET " . (int)$debut;
        }
        $req = $this->db->query($sql);
        while($Art =  $req->fetch(PDO::FETCH_ASSOC)){
            $list[] = new Art($Art['codeArt']);
        }
        $req->closeCursor();
        return $list;
    }
}