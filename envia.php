<?php
//ENVIA OS DADOS CADASTRADOS DO CLIENTE
include('conectar.php');
if (isset($_POST['envia'])) {
	$nome = $_POST['nome'];
	$datanas = $_POST['datanas'];
	$cidade = $_POST['cidade'];
	$endereco = $_POST['endereco'];
	$cpf = $_POST['cpf'];
	$tel = $_POST['tel'];
	$cel = $_POST['cel'];
	$email = $_POST['email'];
	$referencia = $_POST['referencia'];
	$complemento = $_POST['complemento'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$rg = $_POST['rg'];
	$inserir= mysql_query("INSERT INTO cadastro (nome, datanasc, cidade, endereco, cpf, telefone, cel, email, referencia, complemento, estado, cep, rg, status) VALUES ('$nome', '$datanas', '$cidade', '$endereco', '$cpf', '$tel', '$cel', '$email', '$referencia', '$complemento', '$estado', '$cep', '$rg', '0')") or print(mysql_error());
	
	//Retorna o ULTIMO id cadastrado para ser listado no arquivo abrecliente.php
	$sql = "SELECT LAST_INSERT_ID()"; // consulta
	$con = mysql_query($sql) or die ("PROBLEMAS COM A CONSULTA; ".mysql_error()); // enviamos a consulta ao SGBD
	$res = mysql_fetch_row($con); // recuperamos o que for retornado em um array - $res
	$res2=$res[0];
	
	if($inserir){
		echo "<script>alert('Dados enviados com sucesso!')</script>";
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=abrecliente.php?id=$res2'>";
	}else{
		echo "<script>alert('Problema ao enviar os dados!')</script>";
	}
}	
mysql_close($config);
?>
