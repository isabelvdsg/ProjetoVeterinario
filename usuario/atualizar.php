<?php
	include "conexao.php";
	$id = $_POST['id'];
	$nome_animal = $_POST['nome_animal'];
	$raca = $_POST['raca'];
	$sexo = $_POST['sexo'];
	
  $sql = "UPDATE nome_animal, raca, sexo FROM usuario WHERE id = $id"; 
  
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>
