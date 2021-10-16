<?php 
	
	include_once 'conexao.php'; 

	$consultar = $conn->query("select * from usuarios");

	while($dados = $consultar->fetch_assoc()){

		$id 		= $dados['id'];
		$nome 		= $dados['nome'];
		$nickname	= $dados['nickname'];
        $email 	    = $dados['email'];
        $senha      = $dados['senha'];

		echo "<tr class='usus'>";
			echo "<td>$id<td>$nome<td>$nickname<td>$email<td>$senha"; 
			echo "<td class='bnts'><a href='form_alterar.php?id=$id' class='btn green'>Editar</a>";
			echo "<td class='bnts'><a href='deletar.php?id=$id' class='btn red'>Excluir</a>";
		echo "</tr>";
	}

?>