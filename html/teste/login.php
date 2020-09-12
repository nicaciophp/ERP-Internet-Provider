<?php
if (isset($_POST['enviar'])) {

	$login= $_POST["login"];
	$senha = $_POST["senha"];
	include("con.php");
	$resultado = mysql_query("SELECT * FROM usuarios where nome='$login'");
	$linha = mysql_num_rows($resultado);
	if ($linha == 0) {
		echo "<script>alert('Usuário não encontrado!');</script>";
	}
	else{
		if ($senha != mysql_result($resultado, 0, "senha")) {
			echo "<script>alert('A senha digitada esta incorreta!');</script>";
		}
		else{
			setcookie("nome_usuario", $login);
			setcookie("senha_usuario",$senha);

			header("Location: teste.php");
		}
	}	
mysql_close($config);
?>