<?php
include('conectar.php');

if(isset($_POST['salva'])){
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	$nivel=$_POST['nivel'];
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$codificaSenha=sha1($senha);
	if($usuario == "" OR $senha == ""){
	echo "<script>alert('Preencha todos os campos!');</script>";
	}else{
		#COLUNA STATUS (O=ATIVO 1=INATIVO)
		#cria um novo usuario e adciona um status a ele onde depois será utilizado para fazer verificação
		$sql=mysql_query("INSERT INTO login (username, senha, nivel, status, email, nome) VALUES ('$usuario', '$codificaSenha', '$nivel', '0', '$email', '$nome')")or print(mysql_error());
		echo "<script>alert('Dados Enviados com Sucesso');</script>";
	}
}
mysql_close($config);

?>
