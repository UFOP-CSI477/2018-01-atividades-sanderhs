<?php

require_once "database.php";

class classAlunos{
	private $id;
	private $nome;
	private $rua;
	private $numero;
 	private $bairro;
	private $cidade_id;
	private $cep;
	private $mail;


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

	function setRua($value){
		$this->rua = $value;
	}

	function setNumero($value){
		$this->numero = $value;
	}

	function setBairro($value){
		$this->bairro = $value;
	}
	function setCidade_id($value){
		$this->cidade_id = $value;
	}

	function setCep($value){
		$this->cep = $value;
	}
	function setMail($value){
		$this->mail = $value;
	}

	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `alunos`(`nome`, `rua`, `numero`, `bairro`, `cidade_id`, `cep`, `mail`) VALUES (:nome, :rua, :numero, :bairro, :cidade_id, :cep, :email);");
			$stmt->bindParam(":nome", $this->nome);
			$stmt->bindParam(":rua", $this->rua);
			$stmt->bindParam(":numero", $this->numero);
			$stmt->bindParam(":bairro", $this->bairro);
			$stmt->bindParam(":cidade_id", $this->cidade_id);
			$stmt->bindParam(":cep", $this->cep);
			$stmt->bindParam(":mail", $this->mail);

			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}


}	

?>
