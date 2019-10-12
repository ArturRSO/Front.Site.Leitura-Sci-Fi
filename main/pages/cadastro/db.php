<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "teste";

	$conn = mysqli_connect($host, $user, $pass, $banco);
	if ($conn->connect_error){
		die ("Falha na conexão: ". $conn->connect_error);
	}
 ?>
 