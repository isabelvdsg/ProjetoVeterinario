<?php
	include "conexao.php";
	$cod = $_POST['cod'];
  $data = $_POST['data'];
  $nome_animal = $_POST['nome_animal'];
	$raca = $_POST['raca'];
	$sql = "INSERT INTO conulta (id, data, nome_animal, raca) VALUES ('$id', '$data', '$nome_animal', '$raca')";
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>
