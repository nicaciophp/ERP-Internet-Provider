<?php
include('conectar.php');
if (isset($_POST['envia'])) {
	$nome = $_POST['nome'];
	$datanas = $_POST['datanas'];
	$endereco = $_POST['endereco'];
	$cpf = $_POST['cpf'];
	$tel = $_POST['tel'];
	$cel = $_POST['cel'];
	$email = $_POST['email'];
	$referencia = $_POST['referencia'];
	$inserir= mysql_query("INSERT INTO cadastro (nome, datanasc, endereco, cpf, telefone, cel, email, referencia) VALUES ('$nome', '$datanas', '$endereco', '$cpf', '$tel', '$cel', '$email', '$referencia')") or print(mysql_error());
	if ($inserir) {
		echo "<script>alert('Dados enviados com Sucesso!');</script>";
		echo "<a href=\"inicial.php?id=$id\">Voltar</a> ";
	}else{
		echo "Verifique seu cadastro pois ocorreu algum erro!!";
	}
}
mysql_close($config);
?>