<head>
	<?php
		session_start();
		if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
		{
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
		
			}
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