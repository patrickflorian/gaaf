<?php
class AnneeManager{
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

	public function insert(Annee $annee){

		$q=$this->db->prepare('INSERT INTO Annee VALUES (:annee)');
		$q->bindValue(':annee',$annee->getAnnee());
		$q->execute();
		$annee->setAnnee($this->db->lastInsertId());
	}


    public function update(Annee $annee,$newAnnee){
		$q=$this->db->prepare(" UPDATE Annee SET annee=:newAnnee WHERE annee=:ancienAnnee");
		$q->bindValue(':ancienAnnee',$annee->getAnnee());
		$q->bindValue(':newAnnee',$newAnnee);
		$q->execute();
		$annee->setAnnee($newAnnee);
	}

   public function delete($annee){
		$this->db->exec("DELETE FROM Annee WHERE annee='$annee'");
	}

   public function select($debut=-1,$limit=-1,$condition=""){
		$list=array();
		$sql="SELECT * FROM Annee";
		if($condition!=""){
			$sql.=" WHERE $condition ";
		}
		if($debut!=-1 || $limit!=-1){
			$sql.=" LIMIT ".(int)$limit." OFFSET ".(int)$debut;
		}
		$req=$this->db->query($sql);
		while($annee=$req->fetch(PDO::FETCH_ASSOC)){
			$list[]= new Annee($annee['annee']);
		}
		$req->closeCursor();
		return $list;

	}

	public function count(){
		return $this->db->query('SELECT COUNT(*) FROM Annee')->fetchColumn();
	} 
}