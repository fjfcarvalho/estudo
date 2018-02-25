<?php

class Pessoa {
	
	private $idpessoa;
	private $nome;
	private $email;

	public function getIdpessoa(){
		return $this->idpessoa;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setIdpessoa($id){
		$this->idpessoa = $id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}

	public function loadById($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM membros.pessoa WHERE idpessoa = :ID", array(
		":ID"=>$id
		));
		if (count($results)>0){
			$row = $results[0];
			$this->setIdpessoa($row['idpessoa']);
			$this->setNome($row['nome']);
			$this->setEmail($row['email']);
		}

	}

	public function __toString(){
		return json_encode(array(
			"idpessoa"=>$this->getIdpessoa(), 
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail()
		));
	}

// 	public function Incluir($pes){
// 		$con = new PDO("mysql:host=127.0.0.1:3306;dbname=membros", "root", "vsferfer");
// 		$stmt = $con->prepare("INSERT INTO membros.pessoa(nome, email) VALUES(:NOME,:EMAIL)");
// 		$con->beginTransaction();
// 		$stmt->bindParam(":NOME", $pes->getNome());
// 		$stmt->bindParam(":EMAIL",$pes->getEmail());
// 		$stmt->execute();
// 		$con->commit();
// 	}

// 	public function Alterar($pes){
// 		$con = new PDO("mysql:host=127.0.0.1:3306;dbname=membros", "root", "vsferfer");
// 		$stmt = $con->prepare("UPDATE membros.pessoa SET nome = :NOME, email = :EMAIL WHERE idpessoa = :ID");
// 		$nome = $pes->getNome();
// 		$email = $pes->getEmail();
// 		$id = $pes->getIdpessoa();
// 		echo "<BR />"."Proc"."<br/>";
// 		echo $nome;
// 		echo "<br/>";
// 		echo $email;
// 		echo "<br/>";
// 		echo $id;
			
// 		$stmt->bindParam(":NOME", $pes->getNome());
// 		$stmt->bindParam(":EMAIL",$pes->getEmail());
// 		$stmt->bindParam(":ID",$pes->getIdpessoa());
// 		$stmt->execute();
// 	}
// 	public function Deletar($pes){
// 		$con = new PDO("mysql:host=127.0.0.1:3306;dbname=membros", "root", "vsferfer");
// 		$stmt = $con->prepare("DELETE FROM membros.pessoa WHERE idpessoa = :ID");
// 		$con->beginTransaction();
// 		$stmt->bindParam(":ID",$pes->getIdpessoa());
// 		$stmt->execute();
// 		$con->commit();
// 	}

// 	public function Listar(){
// 		$con = new PDO("mysql:host=127.0.0.1:3306;dbname=membros", "root", "vsferfer");
// 		$sql = 'SELECT * FROM membros.pessoa order by nome';
// 		if (count($con->query($sql))>0) {
// 			echo "<br/>";
// 			echo "------------------------------------------------ Pesquisar Listar";
// 			echo "<br/>";
// 			echo "<table><tr><td><strong>ID</strong></td><td><strong>Nome</strong></td><td><strong>E-Mail</strong></td></tr>";
// 			foreach ($con->query($sql) as $row) {
// 				echo "<tr>";
// 	    		echo "<td>".$row['idpessoa'] . "</td>";
// 	    		echo "<td>".$row['nome'] . "</td>";
// 	    		echo "<td>".$row['email'] . "</td>";
// 	    		echo "</tr>";
// 			}
// 			echo "</table>";
// 		}
// 		else echo "Nenhum registro encontrado";
// 	}
// 	public function PesquisarNome($pes){
// 		$con = new PDO("mysql:host=127.0.0.1:3306;dbname=membros", "root", "vsferfer");
// 		$stmt = $con->prepare("SELECT * FROM membros.pessoa WHERE nome like :NOME order by nome");
// 		$stmt->bindParam(":NOME", $pes->getNome());
// 		$stmt->execute();
// 		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 		echo "<br/>";
// 		echo "------------------------------------------------ Pesquisar Nome: " . $pes->getNome();
// 		echo "<br/>";
// 		foreach ($result as $row => $link) {
//     			echo "Id: <strong>".$link["idpessoa"] . "</strong> Nome: <strong>".$link["nome"] . "</strong> E-Mail: <strong>". $link["email"]."</strong> <br>, ";	
// 		}
// 	}
// 	public function PesquisarId($pes){
// 		$con = new PDO("mysql:host=127.0.0.1:3306;dbname=membros", "root", "vsferfer");
// 		$stmt = $con->prepare("SELECT * FROM membros.pessoa WHERE idpessoa = :ID");
// 		$stmt->bindParam(":ID", $pes->getIdpessoa());
// 		$stmt->execute();
// 		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 		$arr = $result;
// 		echo "<br/>";
// 		echo "------------------------------------------------ Pesquisar ID: ". $pes->getIdpessoa();
// 		echo "<br/>";
// 		foreach ($result as $row => $link) {
//     			echo "Id: <strong>".$link["idpessoa"] . "</strong> Nome: <strong>".$link["nome"] . "</strong> E-Mail: <strong>". $link["email"]."</strong> <br>, ";	
// 		}
// 	}
// }

// $pes = new Pessoa;
// $pes->setIdpessoa(8);
// $pes->setNome("Ricardo7");
// $pes->setEmail("ricardo7@gmail.com");
// echo $pes->getNome();
// echo "<br/>";
// echo $pes->getEmail();
// //$pes->Incluir($pes);
// $pes->Deletar($pes);
// //$pes->Listar();
// // $pes->PesquisarNome($pes);
// // $pes->PesquisarId($pes);
}
?>