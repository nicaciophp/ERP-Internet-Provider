<?php
include('conectar.php');
if (isset($_POST['salva'])) {
	$id=$_GET['id'];
	$nome = $_POST['nome'];
	$datanas = $_POST['datanas'];
	$endereco = $_POST['endereco'];
	$cpf = $_POST['cpf'];
	$tel = $_POST['tel'];
	$cel = $_POST['cel'];
	$email = $_POST['email'];
	$referencia = $_POST['referencia'];
	$inserir= mysql_query("UPDATE cadastro SET nome = '$nome', datanasc = '$datanas', endereco = '$endereco', cpf = '$cpf', telefone = '$tel', cel = '$cel', email = '$email', referencia = '$referencia' WHERE id = '$id';") or print(mysql_error());
}
mysql_close($config);
?>