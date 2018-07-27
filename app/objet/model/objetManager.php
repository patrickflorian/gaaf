<?php
class ObjetManager{
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

	public function insert(Objet $objet){

		$q=$this->db->prepare('INSERT INTO Objet VALUES (:idObjet,:description)');
		$q->bindValue(':idObjet',$objet->getIdObjet());
		$q->bindValue(':description',$objet->getDescription());
		$q->execute();
		$objet->setIdObjet($this->db->lastInsertId());
	}

    public function update(Objet $objet,$newDescription){
		$q=$this->db->prepare(" UPDATE Objet SET description=:newDescription WHERE idObjet=:ancienId");
		$q->bindValue(':ancienId',$objet->getIdObjet());
		$q->bindValue(':newDescription',$newDescription);
		$q->execute();
		$objet->setDescription($newDescription);
	}

   public function delete($idObjet){
		$this->db->exec("DELETE FROM Objet WHERE idObjet='$idObjet'");
	}

   public function select($debut=-1,$limit=-1,$condition=""){
		$list=array();
		$sql="SELECT * FROM Objet ";
		if($condition!=""){
			$sql.=" WHERE $condition ";
		}
		if($debut!=-1 || $limit!=-1){
			$sql.=" LIMIT ".(int)$limit." OFFSET ".(int)$debut;
		}
		$req=$this->db->query($sql);
		while($objet=$req->fetch(PDO::FETCH_ASSOC)){
			$list[]= new Objet($objet['idObjet']);
		}
		$req->closeCursor();
		return $list;

	}

	public function count(){
		return $this->db->query('SELECT COUNT(*) FROM Objet')->fetchColumn();
	} 
}