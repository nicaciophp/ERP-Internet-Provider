<?php
include("conectar.php");
session_start();
if (isset($_POST['enviar'])) {

$username = $_POST["login"];
$senha = $_POST["senha"];
$verificaSenha = sha1($senha);

$resultado = mysql_query("SELECT * FROM login where username = '$username'");
$linhas = mysql_num_rows($resultado);
$linhas1 = mysql_fetch_object($resultado);
$senhaBD = $linhas1 -> senha;

if ($linhas !=1) {
	$_SESSION['loginErro'] = "Login inválido!";
	header("Location: index.php");
	exit;
}else{
	if ($verificaSenha != $senhaBD) {
		$_SESSION['loginErro'] = "Senha inválida!";
		header("Location: index.php");
		exit;
	}else{
		$_SESSION['nome_usuario'] = $username;
		$_SESSION['senha_usuario'] = $verificaSenha;
		$_SESSION['nivel'] = $linhas1->nivel;
		header ("Location: inicial.php");
	}
  }
}
mysql_close($config);
?>
