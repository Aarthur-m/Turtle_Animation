<?php 
    include_once 'conexao_usu.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/css_cadastro.css">
    <link rel="icon" href="./img/logoMenor2.png" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Crie uma conta na Turtle Animation</h1>
        <h2>Inserir dados para cadastro</h2>
    </header>
    <section class="cadastro">
        <div class="content">
            <h3>Cadastre - se</h3>
            <form action="cadastrar.php" method="POST">
                <label for="">
                    <i class="fa fa-user-circle"></i>
                    <input type="text" name="nome_usu" id="nome_usu" placeholder="Nome" required>
                </label>
                <label for="">
                    <i class="fa fa-user-secret"></i>
                    <input type="text" name="nick_usu" id="nick_usu" placeholder="Nickname" required>           
                </label>
                <label for="">
                    <i class="fa fa-envelope"></i>
                    <input type="text" name="email_usu" id="email_usu" placeholder="E-mail" required>           
                </label>
                <label for="">
                    <i class="fa fa-lock"></i>
                    <input type="text" name="senha_usu" id="senha_usu" placeholder="Senha" required>
                </label>
                <input type="submit" value="Cadastrar">
                <div class="opcao">
                    Já tem uma conta?<a href="login_usu.php">Entrar</a>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <ul class="info">
            <li><a href="">Politica de Privacidade</a></li>
            <li><a href="">Termos de Serviços</a></li>
        </ul>
        <p class="dr"> © 2004 - 2020 Turtle Animation. Todos os direitos reservados.</p>
        <ul class="media-sociais">
            <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>                
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
        </ul>
    </footer>
</body>
</html>