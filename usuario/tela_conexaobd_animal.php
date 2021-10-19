<?php
	$username = "root";
	$password = "jk99469950";

	try{
		$connection = new PDO("mysql:host=localhost;dbname=projeto", $username, $password);

		echo "Conexão realizada!";

		if ($_REQUEST) { //valores irão vir da requisição;

			$nome = $_REQUEST['nome'];
			$raca = $_REQUEST['raca'];
			$sexo_animal = $_REQUEST['sexo'];

			$sql = "INSERT INTO cadastro (nome, raca, sexo) VALUES ('$nome', '$raca', '$sexo')";

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
