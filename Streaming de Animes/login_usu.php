<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login de Tartaruguinha</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/css_login.css">
    <link rel="icon" href="./img/logoMenor2.png" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Acessar Turtle Animation</h1>
        <h2>Inserir E-mail e Senha do usuário que deseja acessar</h2>
    </header>
    <section class="login">
            <div class="content">
                <h3>Login</h3>
                <form name="form" action="entrar_usu.php" method="post">                  
                    <label for="">
                        <i class="fa fa-user-circle"></i>
                        <input type="text" name="usuario" placeholder="Nickname" required>
                    </label>
                
                    <label for=""> 
                        <i class="fa fa-lock"></i>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </label> 
                        <input type="submit" name="btn" value="Entrar">
                    ou
                    <div class="loginsocial">
                        <a href=""><i class="fa fa-facebook-square" title="Facebook"></i></a>
                        <a href=""><i class="fa fa-twitter" title="Twitter"></i></a>
                        <a href=""><i class="fa fa-google" title="Google"></i></a>
                    </div>
                    <div class="opcoes">
                        <a href="">Esqueceu a senha?</a>
                        <a href="cadastra_se.php">Cadastre-se</a>
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