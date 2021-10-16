<?php 

    include_once 'conexao.php';

    $nome = $_POST["nome_usu"];
    $nickname = $_POST["nick_usu"];
    $email = $_POST["email_usu"];
    $senha = $_POST["senha_usu"];

    $sql = "INSERT INTO usuarios (nome, nickname, email, senha) VALUES ('$nome', '$nickname', '$email', '$senha')";

    $conn -> query($sql);

    header('Location: Mostrar_Consulta.php');

    $conn ->close();
?>