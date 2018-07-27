<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 10:46
 */
class ParagrapheManager
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

    public function insert(Paragraphe $para){
        $q=$this->db->prepare( "INSERT INTO paragraphe(codeParagraphe) VALUES (:code)");
        $q->bindValue(':code',$para->getCodeParagraphe());
        $q->execute();

        $para->setCodeParagraphe($this->db->lastInsertId());
    }
    public function update(Paragraphe $para,$newCodeParagraphe){
        $q=$this->db->prepare("UPDATE paragraphe SET codeParagraphe=:new WHERE idParagraphe =:code ");
        $q->bindValue(':code',$para->getCodeParagraphe());
        $q->bindValue(':new',$newCodeParagraphe);
        $q->execute();

        $para->setCodeParagraphe($newCodeParagraphe);
    }
    public function delete($codeParagraphe){
        $this->db->exec("DELETE FROM paragraphe WHERE codeParagraphe='$codeParagraphe' ");
    }
    public function count()
    {
        return $this->db->query('SELECT COUNT(*) FROM paragraphe')->fetchColumn();
    }

    public function select($debut=-1,$limit=-1,$condition=""){
        $list=array();
        $sql = "SELECT * from paragraphe";
        if($condition!=""){
            $sql.=" WHERE $condition ";
        }
        if($debut!=-1 || $limit!=-1){
            $sql.= " LIMIT ".(int)$limit . " OFFSET " . (int)$debut;
        }
        $req = $this->db->query($sql);
        while($para =  $req->fetch(PDO::FETCH_ASSOC)){
            $list[] = new Paragraphe($para['idParagraphe'],$para['codeParagraphe']);
        }

        $req->closeCursor();
        return $list;
    }

}