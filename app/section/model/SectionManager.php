<?php 
class SectionManager{
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
	public function insert(Section $section){
		//requette preparée pour inserrer les données dans la bd
		$q=$this->db->prepare("INSERT INTO Section VALUES (:codeSection)");
		//ici on veut remplacer codeSection par getCodeSection
		//le : est utilisé pour dire qu'on veut remplacer cette chaine de carractère par une variable
		
		$q->bindValue(':codeSection',$section->getCodeSection());
		$q->execute();
		$section->setCodeSection($this->db->lastInsertId());
	}

	public function update(Section $section,$newCodeSection){

		$q=$this->db->prepare("UPDATE Section SET codeSection=:new WHERE codeSection=:ancien ");
		$q->bindValue(':new',$newCodeSection);
		$q->bindValue(':ancien',$section->getCodeSection());
		$q->execute();
		$section->setCodeSection($newCodeSection);
	}

	public function delete($codeSection){
		$this->db->exec("DELETE FROM Section WHERE codeSection='$codeSection'");
	}

	public function select($debut=-1,$limit=-1,$condition=""){
		$list=array();
		$sql="SELECT * FROM Section ";
		if($condition!=""){
			$sql.=" WHERE $condition ";
		}
		if($debut!=-1 || $limit!=-1){
			$sql.=" LIMIT ".(int)$limit." OFFSET ".(int)$debut;
		}
		$req=$this->db->query($sql);
		while($section=$req->fetch(PDO::FETCH_ASSOC)){
			$list[]= new Section($section['codeSection']);
		}
		$req->closeCursor();
		return $list;

	}
	//cette fonction aide pour la pagination
	public function count(){
		return $this->db->query('SELECT COUNT(*) FROM Section')->fetchColumn();
	} 


}
