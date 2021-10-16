<?php 

    include_once 'conexao_usu.php';

    $nome = $_POST["nome_usu"];
    $nickname = $_POST["nick_usu"];
    $email = $_POST["email_usu"];
    $senha = $_POST["senha_usu"];

    $sql = "INSERT INTO usuarios (nome, nickname, email, senha) VALUES ('$nome', '$nickname', '$email', '$senha')";

    $conn -> query($sql);

    header('Location: login_usu.php');

    $conn ->close();
?>