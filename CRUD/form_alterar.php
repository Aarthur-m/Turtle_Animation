<?php
    include_once 'conexao.php';
    include 'verificar_login.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Alterar</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style_forms.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<?php
        include_once 'conexao.php';

        $id = $_GET['id'];

        $consultar = $conn->query("select * from usuarios where id ='$id'");

        while($dados = $consultar->fetch_assoc()){

            $nome        = $dados['nome'];
            $nickname    = $dados['nickname'];
            $email       = $dados['email'];
            $senha       = $dados['senha'];
        }
?>
    <header>
		<h1>Alteração do Usuário</h1>
		<div class="opcoes">
			<a href="form_usu.php" class="btn green">Novo Usuário</a>
			<a href="sair.php" class="btn red">Sair</a>
		</div>
	</header>
    <form action="alterar.php?id=<?php echo $id;?>" method="POST">
        <table id="form">
            <tr>
                <td>Nome: <input type="text" name="nome" value="<?php echo $nome?>" required></td>
            </tr>
            <tr>
                <td>Nickname: <input type="text" name="nickname" value="<?php echo $nickname?>" required></td>
            </tr>
            <tr>
                <td>Email: <input type="text" name="email" value="<?php echo $email ?>" required></td>
            </tr>
            <tr>
                <td>senha: <input type="text" name="senha" value="<?php echo $senha ?>" required></td>
            </tr>
            <tr>
                <td class="btns">
                    <input type="submit" name="" value="Alterar" class="btn green">
                    <a href="Mostrar_Consulta.php" class="btn red">Cancelar</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>