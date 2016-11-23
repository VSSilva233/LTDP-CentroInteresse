<html>
	<head>
		<meta charset="utf-8"> </meta>
		<link rel="stylesheet" href="estilo.css" />
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css" />
		<script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.min.js" > </script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<title>Formulario</title>
	</head>
	<body>
	
		<div id="container">

		<?php
			
			/*configurco de enderecmento do bnco de ddos*/
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			
			/*configurco de acesso o bnco de ddos*/
			$nome_banco = "bd_questao";
			
			$conexao = mysql_connect($servidor, $usuario, $senha);
			
			/*verifica se a conexao realmente foi criada*/
			/*se (nao conexao) entao, ou seja, conexao e falsa*/
			if (!$conexao) {
				echo "Não foi possível connectar ao servidor";
				exit;
			}
			
			
			
			/*Selecione o banco de dados ou morra*/
			$banco = mysql_select_db($nome_banco, $conexao) or die ("Não foi possível conectar ao banco de dados");
			
			
				
			$nome = $_POST['nome'];
			$login = $_POST['login'];
			$senhaNova = $_POST['senha'];
			
			//verificando se o usuario já existe no banco de dados
			$comandosql = "SELECT * FROM usuario WHERE login='$login';";
			$resultado = mysql_query($comandosql);
			
			if (mysql_errno()) {
				$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>Quando executou:<br>\n$comandosql\n<br>";
				echo $error;
			}
			$itembancodados = mysql_fetch_array($resultado);

			$usuario = $itembancodados['ID_USUARIO'];
			
			
			if ($usuario > 0){
				echo "<h1>Login já existente no banco de dados</h1>";
				echo "<a href='formulario.html'>Clique aqui para voltar</a>";
			}else{
				//Inserir a questao 
				$sql = "INSERT INTO usuario VALUES ('', '$nome', '$login', '$senhaNova' )";
				$sqlexecutado = mysql_query($sql);
				
				if (mysql_errno()) { 
					$error = "MySQL error ".mysql_errno().": ".mysql_error();
					echo $error;
				} else {
					echo "<h1>Usuário salvo com sucesso </h1>";
					echo "<a href='formulario.html'>Clique aqui para voltar</a>";
				}
				
			}
			mysql_close($conexao);
		?>
	</div>
</body>
</html>