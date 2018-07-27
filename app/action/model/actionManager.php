<?php
class ActionManager{
    protected $db;
	function __construct(\PDO $db){
		$this->db=$db;

	}
	public function getdb(){
		return $this->db;
	}
	public function setdb($db){
		$this->db=$db;
	}

	public function insert(Action $action){

		$q=$this->db->prepare('INSERT INTO Action VALUES (:idAction,:libelleAction)');
		$q->bindValue(':idAction',$action->getIdAction());
		$q->bindValue(':libelleAction',$action->getLibelleAction());
		$res = $q->execute();
		$action->setIdAction($this->db->lastInsertId());
		return $res;
	}

    public function update(action $action,$newLibelleAction){
		$q=$this->db->prepare(" UPDATE Action SET libelleAction=:newLibelle WHERE idAction=:ancienId");
		$q->bindValue(':ancienId',$action->getIdAction());
		$q->bindValue(':newLibelle',$newLibelleAction);
		$r = $q->execute();
		$action->setLibelleAction($newLibelleAction);
		return $r;
	}

   public function delete($idAction){
        try{
            $this->db->exec("DELETE FROM Action WHERE idAction='$idAction'");
            return true;
        }catch (Exception $e){
            return false;
        }

	}

   public function select($debut=-1,$limit=-1,$condition=""){
		$list=array();
		$sql="SELECT * FROM Action ";
		if($condition!=""){
			$sql.=" WHERE $condition ";
		}
		if($debut!=-1 || $limit!=-1){
			$sql.=" LIMIT ".(int)$limit." OFFSET ".(int)$debut;
		}
		$req=$this->db->query($sql);
		while($action=$req->fetch(PDO::FETCH_ASSOC)){
			$list[]= new Action($action['idAction']);
		}
		$req->closeCursor();
		return $list;

	}

	public function count(){
		return $this->db->query('SELECT COUNT(*) FROM Action')->fetchColumn();
	} 
}