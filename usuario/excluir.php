<?php
	include "conexao.php";
	$id = $_POST['id'];
	
  $sql = "DELETE FROM usuario WHERE id = $idl; 
  
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>
