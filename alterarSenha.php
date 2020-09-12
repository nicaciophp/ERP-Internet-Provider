<?php
include('conectar.php');

$id = $_POST['id'];

$senhaNova = $_POST['senhaNova'];
$senhaConfirm = $_POST['senhaConfirm'];

$encripSenha = sha1($senhaNova);
$encripConfirm = sha1($senhaConfirm);

$sql = mysql_query("SELECT * FROM login WHERE id=$id");
$count = mysql_fetch_object($sql);


if($senhaNova == $senhaConfirm){
	mysql_query("UPDATE login SET senha = '$encripSenha' WHERE id =$id");
	echo "<script>alert('Senha alterada com sucesso.');</script>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=listarUsuario.php'>";
}else{
	echo "<script>alert('As senhas não conferem, tente novamente.');</script>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=listarUsuario.php'>";
}

mysql_close($config);
?>
