<?php
require('../includes/config.php');

if(isset($_POST['nome'])){
	function clear($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$nome = clear($_POST['nome']);
	$email = clear($_POST['email']);
	$telefone = clear($_POST['telefone']);
	$mensagem = clear($_POST['mensagem']);

	try {
		$insere = $sql->prepare("INSERT INTO faleconosco SET nome = ?, email = ?, telefone = ?, mensagem = ?, data = ?");
		$insere->bindParam(1, $nome, PDO::PARAM_STR);
		$insere->bindParam(2, $email, PDO::PARAM_STR);
		$insere->bindParam(3, $telefone, PDO::PARAM_STR);
		$insere->bindParam(4, $mensagem, PDO::PARAM_STR);
		$insere->bindParam(5, $tempoAtual, PDO::PARAM_STR);
		if($insere->execute()){
			echo 1;
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}