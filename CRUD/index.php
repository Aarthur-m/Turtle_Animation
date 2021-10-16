<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Formulário de Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style_index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<h1>Login do Administrador</h1>
	</header>
	<form name="form" action="entrar.php" method="post">
		<table id="form">
			<tr>
				<td>Usuário: <input type="text" name="usuario" required>
			</tr>
			<tr>
				<td>Senha: <input type="password" name="senha" required>
			</tr>
			<tr>
				<td class="btns"><input type="submit" name="btn" value="Entrar" class="btn green">
			</tr>
		</table>
	</form>
</body>
</html>