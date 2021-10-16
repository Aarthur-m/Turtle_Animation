<?php 
    include 'conexao.php';
    include 'Mostrar_Consulta';

    $id = $_GET['id'];

    $sql = "DELETE from usuarios where usuarios.id = $id";

    $conn -> query($sql);

    header('Location: Mostrar_Consulta.php');
?>