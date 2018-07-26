<?php
/**
 * Description
 * @authors Your Name (you@example.org)
 * @date    2018-07-26 13:08:04
 * @version 1.0.0
 */

class Chapitre  {
    protected $db;
    function __construct(\PDO $db){
        $this->db = $db;
    }
    public  function getDb(){
        return $this->db;
    }
    public function setDb($db){
        $this->db = $db;
    }

    public function insert(Chapitre $chapitre){
        $q=$this->db->prepare( "INSERT INTO chapitre VALUES (:codeChapitre)");
        $q->bindValue(':codeChapitre',$chapitre->getCodeChapitre());
        $q->execute();

        $chapitre->setCodeChapitre($this->db->lastInsertId());
    }
    public function update(Chapitre $chapitre,$newCodeChapitre){
        $q=$this->db->prepare("UPDATE chapitre SET codeChapitre=:new WHERE codeChapitre =:codeChapitre ");
        $q->bindValue(':codeChapitre',$chapitre->getCodeChapitre());
        $q->bindValue(':new',$newCodeChapitre);
        $q->execute();

        $chapitre->setCodeChapitre($newCodeChapitre);
    }
    public function delete($codeChapitre){
        $this->db->exec("DELETE FROM chapitre WHERE codeChapitre='$codeChapitre' ");
    }
    public function count()
    {
        return $this->db->query('SELECT COUNT(*) FROM chapitre')->fetchColumn();
    }

    public function select($debut=-1,$limit=-1,$condition=""){
        $list=array();
        $sql = "SELECT * from chapitre";
        if($condition!=""){
            $sql.=" WHERE $condition ";
        }
        if($debut!=-1 || $limit!=-1){
            $sql.= " LIMIT ".(int)$limit . " OFFSET " . (int)$debut;
        }
        $req = $this->db->query($sql);
        while($chapitre = $req->fetch(PDO::FETCH_ASSOC)){
            $list[] = new Chapitre($chapitre['codeChapitre']);
        }

        $req->closeCursor();
        return $list;  
    }
}