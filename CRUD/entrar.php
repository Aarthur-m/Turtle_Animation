<?php 
	session_start();
	include 'conexao.php';

	if (empty($_POST['usuario']) || empty($_POST['senha'])) {
		header('Location: index.php');
	}

	$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);

	$query = "SELECT id_ADM, email_ADM from administradores where email_ADM = '$usuario' and senha_ADM = '$senha'";

	$result = mysqli_query($conn, $query);

	$row = mysqli_num_rows($result);

	if($row == 1) {
		$_SESSION['usuario'] = $usuario; 
		header('Location: Mostrar_Consulta.php');
	} else {
		header('Location: index.php');
	}
?>