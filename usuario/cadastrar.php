<?php
	include "conexao.php";
	$cpf = $_POST['cpf'];
  $telefone = $_POST['telefone'];
	$email = $_POST['email'];
  $nome_use = $_POST['nome_use'];
	$senha = $_POST['senha'];
	$sql = "INSERT INTO usuario (cpf, telefone, email, nome_use, senha) VALUES ('$cpf', '$telefone', '$email', '$nome_use', '$senha')";
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>
