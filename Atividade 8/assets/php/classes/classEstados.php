<?php

require_once "database.php";

class classEstados{
	private $id;
	private $nome;
	private $sigla;
	

	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}

	function setId($value){
		$this->id = $value;
	}

	function setNome($value){
		$this->nome = $value;
	}

	function setSigla($value){
		$this->sigla = $value;
	}


	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `estados`(`nome`,`sigla`)VALUES (:nome, :sigla)");
			$stmt->bindParam(":nome", $this->nome);
			$stmt->bindParam(":sigla", $this->sigla);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}


			public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `estados` WHERE 1 ORDER BY `nome`");
		$stmt->execute();
		return $stmt;
	}

}
?>
