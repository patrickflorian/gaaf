<?php
class ExerciceManager{
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

	public function insert(Exercice $exercice){

		$q=$this->db->prepare('INSERT INTO Exercice VALUES (:idExercice)');
		$q->bindValue(':idExercice',$exercice->getIdExercice());
		$q->execute();
		$exercice->setIdExercice($this->db->lfstInsertId());
	}


    public function update(Exercice $exercice,$newIdExercice){
		$q=$this->db->prepare(" UPDATE Exercice SET idExercice=:newId WHERE idExercice=:ancienId");
		$q->bindValue(':ancienId',$exercice->getIdExercice());
		$q->bindValue(':newId',$newIdExercice);
		$q->execute();
		$exercice->setIdExercice($newIdExercice);
	}

   public function delete($idExercice){
		$this->db->exec("DELETE FROM Exercice WHERE idExercice='$idExercice'");
	}

   public function select($debut=-1,$limit=-1,$condition=""){
		$list=array();
		$sql="SELECT * FROM Exercice ";
		if($condition!=""){
			$sql.=" WHERE $condition ";
		}
		if($debut!=-1 || $limit!=-1){
			$sql.=" LIMIT ".(int)$limit." OFFSET ".(int)$debut;
		}
		$req=$this->db->query($sql);
		while($exercice=$req->fetch(PDO::FETCH_ASSOC)){
			$list[]= new Exercice($exercice['idExercice']);
		}
		$req->closeCursor();
		return $list;

	}

	public function count(){
		return $this->db->query('SELECT COUNT(*) FROM Exercice')->fetchColumn();
	} 
}