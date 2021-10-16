<?php 
	include 'verificar_login.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Lista de Cadastro dos Usuários</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/consulta.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<h1>Consulta de Usuário</h1>
		<div class="opcoes">
			<a href="form_usu.php" class="btn green">Novo Usuário</a>
			<a href="sair.php" class="btn red">Sair</a>
		</div>
	</header>
	<div class="content">
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Nickname</th>
					<th>Email</th>
					<th>Senha</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include_once 'Consultar.php';
				?>
			</tbody>	
		</table>
	</div>
</body>
</html>