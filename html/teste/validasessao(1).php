<?php
session_start();
if (isset($_SESSION["nome_usuario"])) 
	$nome_usuario = $_SESSION["nome_usuario"];
if (isset($_SESSION["senha_usuario"])) 
	$senha_usuario = $_SESSION["senha_usuario"];
if (!(empty($nome_usuario)OR empty($senha_usuario))) {
	include('con.php');
	$resultado = mysql_query("SELECT * FROM login WHERE username = '$nome_usuario'");
	if (mysql_num_rows($resultado) == 1) {
		if ($senha_usuario != mysql_result($resultado, 0, "senha")) {
			unset($_SESSION['nome_usuario']);
			unset($_SESSION['senha_usuario']);
			header("Location: index.php");
			echo "Você não efetuou o login!";
			exit;
			}
		}else{
			unset($_SESSION['nome_usuario']);
			unset($_SESSION['senha_usuario']);
			header("Location: index.php");
			echo "Você não efetuou o login!";
			exit;
		}
	}else{
		echo "Você não efetuou o login!";
		header("Location: index.php");
		exit;
	}
mysql_close($config);
?>