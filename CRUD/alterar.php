<?php

        include_once "form_alterar.php";
        include_once "conexao.php";

        $id = $_GET['id'];

        $nome    = isset($_POST['nome'])?$_POST['nome']:"";
        $nickname = isset($_POST['nickname'])?$_POST['nickname']:"";
        $email    = isset($_POST['email'])?$_POST['email']:"";
        $senha   = isset($_POST['senha'])?$_POST['senha']:"";

        $alterar = $conn->query("update usuarios set nome ='$nome', email = '$email', nickname = '$nickname', senha = '$senha' where id = '$id'");

            if(mysqli_affected_rows($conn) > 0){
                    header("Location: Mostrar_Consulta.php");
            }

?>