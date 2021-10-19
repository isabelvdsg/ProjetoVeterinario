<?php
	include "conexao.php";
	$id = $_POST['id'];
	
  $sql = "UPDATE FROM usuario WHERE id = $id; 
  
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>
