<?php 
	session_start();
	include 'conexao_usu.php';

	if (empty($_POST['usuario']) || empty($_POST['senha'])) {
		header('Location: login_usu.php');
	}

	$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);

	$query = "SELECT id, nickname from usuarios where nickname = '$usuario' and senha = '$senha'";
	
	$result = mysqli_query($conn, $query);

	$row = mysqli_num_rows($result);
	
	if($row == 1) {
		
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
		exit();
	} else {
		header('Location: login_usu.php');
		exit();
	}
?>