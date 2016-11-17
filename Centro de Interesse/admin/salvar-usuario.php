<?php
	
		
	$nome = $_POST['NOME'];
	$login = $_POST['LOGIN'];
	$senhaNova = md5($_POST['SENHA']);
	
	include '../conexao.php';
	//Inserir a questao 
	$sql = "INSERT INTO usuario VALUES ('', '$nome', '$login', '$senhaNova' )";
	$sqlexecutado = mysql_query($sql);
	
	if (mysql_errno()) { 
		$error = "MySQL error ".mysql_errno().": ".mysql_error();
		echo $error;
	} else {
		echo "<h1>Usuário salvo com sucesso </h1>";
	}
	
		
	
	mysql_close($conexao);
?>

</body>
</html>