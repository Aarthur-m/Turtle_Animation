<?php 
    session_start();
    if(@$_SESSION['usuario']) {
        echo "<ul class='usu'>";
        echo    "<li>";
        echo $_SESSION['usuario'];
        echo   "</li>";
        echo      "<li><a href='sair_usu.php'>Sair</a></li>";
        echo      "</ul>";
    } else {
        echo "<ul class='usu'>
                <li><a href='cadastra_se.php'>Cadastra-se</a></li>
                <li><a href='login_usu.php'>Login</a></li>
            </ul>";
    }
    
?>