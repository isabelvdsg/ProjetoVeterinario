<?php
	$username = "root";
	$password = "jk99469950";

	try{
		$connection = new PDO("mysql:host=localhost;dbname=projeto", $username, $password);

		echo "Conexão realizada!";

		if ($_REQUEST) { //valores irão vir da requisição;

			$nome = $_REQUEST['nome'];
			$cpf = $_REQUEST['cpf'];
			$telefone = $_REQUEST['telefone'];
			$email = $_REQUEST['email'];
			$nome_use = $_REQUEST['nome_use'];
			$senha = $_REQUEST['senha'];

			$sql = "INSERT INTO cadastro (nome, cpf, telefone, email, nome_use, senha) VALUES ('$nome', '$cpf', '$telefone','$email', '$nome_use','$senha')";

			if ($connection->query($sql)) {
				echo "Cadastro realizado!";
			} else {
				echo "Erro: ".$connection->error;
			}
		}

	} catch(PDOException $e){
		echo "Erro de conexão ".$e->getMessage();
	}
?>