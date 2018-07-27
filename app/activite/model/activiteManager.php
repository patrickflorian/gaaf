<?php
class ActiviteManager{
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

	public function insert(Activite $activite){

		$q=$this->db->prepare('INSERT INTO Activite VALUES (:codeActivite,:libelleActivite)');
		$q->bindValue(':codeActivite',$activite->getCodeActivite());
		$q->bindValue(':libelleActivite',$activite->getLibelleActivite());
		$q->execute();
		$activite->setCodeActivite($this->db->lastInsertId());
	}

    public function update(Activite $activite,$newCodeactivite,$newLibelleActivite){
    	$q=$this->db->prepare('UPDATE Activite SET codeActivite=:newCode,libelleActivite=:newLibelle WHERE codeActivite=:ancienCode');
    	$q->bindValue(':newcode',$newCodeactivite);
    	$q->bindValue(':newLibelle',$newLibelleActivite);
    	$q->bindValue(':ancienCode',$activite->getCodeActivite());
    	$q->execute();
    	$activite->setCodeActivite($newCodeactivite);
    	$activite->setLibelleActivite($newLibelleActivite);
    } 


   public function delete($codeActivite){
		$this->db->exec("DELETE FROM Activite WHERE codeActivite='$codeActivite'");
	}

   public function select($debut=-1,$limit=-1,$condition=""){
		$list=array();
		$sql="SELECT * FROM Activite ";
		if($condition!=""){
			$sql.=" WHERE $condition ";
		}
		if($debut!=-1 || $limit!=-1){
			$sql.=" LIMIT ".(int)$limit." OFFSET ".(int)$debut;
		}
		$req=$this->db->query($sql);
		while($activite=$req->fetch(PDO::FETCH_ASSOC)){
			$list[]= new Activite($activite['codeActivite']);
		}
		$req->closeCursor();
		return $list;

	}

	public function count(){
		return $this->db->query('SELECT COUNT(*) FROM Activite')->fetchColumn();
	} 
}