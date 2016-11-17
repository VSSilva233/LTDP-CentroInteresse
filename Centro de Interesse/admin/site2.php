<html lang="pt-br">
<head>
	<?php  
		/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
		session_start();
		if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
		{
			unset($_SESSION['login']);
			unset($_SESSION['senha']);

			}else{
			header('location:index.html');
			}
		$logado = $_SESSION['login'];
	?>
	
	
  
<meta charset="utf-8">
<title>Lista de Questões</title>

<!--  Nucleo do jquery -->
<link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>
	<div class="container-fluid">
		<section class="container">
			
			<?php 
				echo" Bem vindo $logado";
			?>
				
			<a href='listar-questoes.php'> Clique aqui para gerenciar questões</a>
			<a href='listar-usuarios.php'> Clique aqui para gerenciar usuários</a>
				
			
		</section>
		

	</div>


</body>
</html>