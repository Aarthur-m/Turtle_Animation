<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turtle Animation</title>
    <link rel="icon" href="./img/logoMenor2.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" href="JS/app.js"></script>
</head>
<body>
    <nav id="nav">
        <ul>
            <li><a href="#intro">Início</a></li>
            <li><a href="#exclusivos">Animes</a></li>
            <li><a href="#pacotes">Planos</a></li>
            <li><a href="#sobre">Sobre</a></li>
        </ul>
    <?php
        include_once 'verificar_usu.php';
    ?>
    </nav>
    <section class="intro" id="intro">
        <h1>A plataforma de Streaming que mais investiu no Brasil.</h1>
        <img src="img/Logo.png" alt="" class="logo">
        <div class="center">
            <img src="img/relogio2.png" alt="" class="icons">
            <img src="img/multTela2.png" alt="" class="icons">
            <img src="img/dublagem2.png" alt="" class="icons">
            <img src="img/semNet4.png" alt="" class="icons">
        </div>
        <div class="desc">
            <h2>Assista animes após meia hora de exibição</h2>
            <h2>Assista seus animes em qualquer lugar</h2>
            <h2>Veja seus animes com dublagem de alta qualidade</h2>
            <h2>Baixe seus animes para assistir offline quando quiser</h2>
        </div>
    </section>
    <section class="exclusivos" id="exclusivos">
        <h1>Animes Gratuitos e Exclusivos</h1>
        <h2>Catálogo com uma vasta quantidade de animes, alguns disponíveis só na nossa plataforma</h2>
    </section>
    <section class="pacotes" id="pacotes">
        <h1>Planos Premium</h1>
        <h2>Assine nossos planos para desfrutar as suas vantagens</h2>
        <div class="Todos-planos">
            <div class="pacote1">
                <h2>Plano Mensal</h2>
                <img src="img/ThreeStars.png" alt="" class="Three">
                <h3>R$ 26,00/mês</h3>
                <ul>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                        Sem anúncios
                    </li>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                        Direito a animes exclusivos
                    </li>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                        Novos episódios logo após a exibição
                    </li>
                    <li>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        Acesso ilimitado ao nosso conteúdo
                    </li>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    Acesso a uma tela extra
                    </li>
                    <li class="anulado">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <i>Direito a assistir offline</i>
                    </li>
                    <li class="anulado">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <i>Desconto de 20% no anual</i>
                    </li>
                </ul>
                <button>INICIAR TESTE GRATUITO DE 15 DIAS</button>
            </div>
            <div class="pacote1">
                <h2>Plano Mensal</h2>
                <img src="img/FourStars.png" alt="">
                <h3>R$ 35,00/mês</h3>
                <ul>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                        Sem anúncios
                    </li>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                        Direito a animes exclusivos
                    </li>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                        Novos episódios logo após a exibição
                    </li>
                    <li>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        Acesso ilimitado ao nosso conteúdo
                    </li>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    Acesso a quatro telas extra
                    </li>
                    <li>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        Direito a assistir offline
                    </li>
                    <li class="anulado">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <i>Desconto de 20% no anual</i>
                    </li>
                </ul>
                <button>INICIAR TESTE GRATUITO DE 15 DIAS</button>
            </div>
            <div class="pacote1">
            <h2>Plano Mensal</h2>
            <img src="img/FiveStars.png" alt="">
            <h3>R$ 336,00/ano</h3>
            <ul>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                        Sem anúncios
                    </li>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                        Direito a animes exclusivos
                    </li>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                        Novos episódios logo após a exibição
                    </li>
                    <li>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        Acesso ilimitado ao nosso conteúdo
                    </li>
                    <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    Acesso a quatro telas extra
                    </li>
                    <li>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        Direito a assistir offline
                    </li>
                    <li>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        Desconto de 20% no anual
                    </li>
                </ul>
                <button>INICIAR TESTE GRATUITO DE 15 DIAS</button>
            </div>
        </div>
    </section>
    <section class="sobre" id="sobre">
        <div class="titulo">
            <h1 class="q">Quem</h1>
            <h1 class="s">Somos?</h1>
        </div>
        <div class="texto">
            <p>
            Somos uma empresa da Indonésia que decidimos investir no Brasil por conta da alta taxa de popularidade dos nossos animes nesta região.
            </p>
            <p>
            Temos em vista que: O Brasil é um País Em desenvolvimento com pouco investimento na área de Streaming japonesa, iremos investir não apenas no Streaming de anime, pretendemos investir na introdução de mangás famosos para o Brasil com preços acessíveis.
            </p>
            <p>
            Temos uma Parceria com a Sony, pretendemos lançar um anime do universo de God of War, exclusivo de nossa plataforma.
            Já estamos disponíveis em quase todos países do mundo, em breve pretendemos estar disponíveis na China.
            </p>
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
    <button id="btnTop" onclick="backToTop()"><a href="#nav"><i class="fa fa-angle-up"></i></a></button>
</body>
</html>