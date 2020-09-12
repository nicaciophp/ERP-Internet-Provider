<?php
include("con.php");
session_start();
if (isset($_POST['enviar'])) {

$username = $_POST["login"];
$senha = $_POST["senha"];

$resultado = mysql_query("SELECT * FROM login where username = '$username'");
$linhas = mysql_num_rows($resultado);

if ($linhas !=1) {
		$_SESSION['loginErro'] = "Login ou senha invalidos!";
		header("Location: index.php");
	exit;
}else{
	if ($senha != mysql_result($resultado, 0, "senha")) {
		$_SESSION['loginErro'] = "Login ou senha invalidos!";
		header("Location: index.php");
	}else{
		$_SESSION['nome_usuario'] = $username;
		$_SESSION['senha_usuario'] = $senha;

		header ("Location: teste.php");
	}
  }
}
mysql_close($config);
?>