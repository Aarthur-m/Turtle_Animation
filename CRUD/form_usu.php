<?php 
    include_once 'conexao.php';
	include 'verificar_login.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_forms.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <header>
		<h1>Cadastro de Usuário</h1>
		<div class="opcoes">
			<a href="sair.php" class="btn red">Sair</a>
		</div>
	</header>
    <form action="inserir.php" method="POST">
        <table id="form">
            <tr>
                <td>Nome: <input type="text" name="nome_usu" id="nome_usu" required>
            </tr>
            <tr>
                <td>Nickname: <input type="text" name="nick_usu" id="nick_usu" required>
            </tr>
            <tr>
                <td>E-mail: <input type="text" name="email_usu" id="email_usu" required>
            </tr>
            <tr>
                <td>Senha: <input type="text" name="senha_usu" id="senha_usu" required>
            </tr>
            <tr>
                <td class="btns"><input type="submit" value="Inserir" class="btn green">
                <a href="Mostrar_Consulta.php" class="btn red">Cancelar</a></td>
            </tr>
        </table>
    </form>
</body>
</html>