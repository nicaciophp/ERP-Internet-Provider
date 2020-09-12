<?php
session_start();
require('con.php');
if (isset($_POST['login']))&&isset($_POST['senha']))) {
	$usuario = mysql_real_escape_string($bd, $_POST['login']);
	$senha = mysql_real_escape_string($bd, $_POST['senha']);
	$senha = md5($senha);

	$sql = "SELECT * FROM usuarios WHERE nome = '$usuario' && senha = '$senha' LIMIT 1"
	$result = mysql_query($bd, $sql);
	$resultado = mysql_num_rows($result);

	if (empty($resultado)) {
		$_SESSION['loginErro'] = "Usuario ou senha invalido!";
		header("Location: index.php");
	}elseif (isset($resultado)) {
		header("Location: teste.php");
	}
}
?>