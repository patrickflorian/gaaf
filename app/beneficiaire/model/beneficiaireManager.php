<?php 
class BeneficiaireManager{
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

public function insert(Beneficiaire $beneficiaire){
		$q=$this->db->prepare("INSERT INTO Beneficiaire VALUES (:idBeneficiaire,:nom)");
		$q->bindValue(':idBeneficiaire',$beneficiaire->getIdBeneficiaire());
		$q->bindValue('nom',$beneficiaire->getNom());
		$q->execute();
		$beneficiaire->setIdBeneficiaire($this->db->lastInsertId());
	}


	public function update(Beneficiaire $beneficiaire,$newNom){
		$q=$this->db->prepare(" UPDATE Beneficiaire SET nom=:newNom WHERE idBeneficiaire=:ancienId");
		$q->bindValue(':ancienId',$beneficiaire->getIdBeneficiaire());
		$q->bindValue(':newNom',$newNom);
		$q->execute();
		$beneficiaire->setNom($newNom);
	}

 public function delete($idBeneficiaire){
 	$this->db->exec("DELETE FROM Beneficiaire WHERE idBeneficiaire='$idBeneficiaire'");
 }


public function select($debut=-1,$limit=-1,$condition=""){
		$list=array();
		$sql="SELECT * FROM Beneficiaire ";
		if($condition!=""){
			$sql.=" WHERE $condition ";
		}
		if($debut!=-1 || $limit!=-1){
			$sql.=" LIMIT ".(int)$limit." OFFSET ".(int)$debut;
		}
		$req=$this->db->query($sql);
		while($beneficiaire=$req->fetch(PDO::FETCH_ASSOC)){
			$list[]= new Beneficiaire($beneficiaire['idBeneficiaire']);
		}
		$req->closeCursor();
		return $list;

	}
public function count(){
		return $this->db->query('SELECT COUNT(*) FROM Beneficiaire')->fetchColumn();
	} 



}