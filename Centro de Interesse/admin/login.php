<?php 
 	$login = $_POST['login'];
 	$entrar = $_POST['entrar'];
 	$camposenha = md5($_POST['senha']);
	include '../conexao.php';
    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha = '$camposenha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          session_start("login",$login);
          header("Location:index.php");
        }
    }
?>