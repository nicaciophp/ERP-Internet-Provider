<?php
include('conectar.php');
#ATIVA CLIENTE
if(isset($_POST["ativarCliente"]) && !empty($_POST["ativarCliente"])){
	$id=$_POST['ativarCliente'];
	$sql = mysql_query("SELECT * FROM cadastro WHERE id = $id");
	$dados = mysql_fetch_object($sql);
	$nome=$dados->nome;
	mysql_query("UPDATE cadastro SET status = '0' WHERE id =$id"); 
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=abrecliente.php?id=$id'>";

}


#DESATIVA CLIENTE
if(isset($_POST["desativarCliente"]) && !empty($_POST["desativarCliente"])){
	$id=$_POST['desativarCliente'];
	$sql = mysql_query("SELECT * FROM cadastro WHERE id = $id");
	$dados = mysql_fetch_object($sql);
	$nome=$dados->nome;
	$status = $dados->status;

	$sql1 = mysql_query("SELECT * FROM servicos WHERE id_cliente = $id");
	$dados1 = mysql_fetch_object($sql1);
	$id1=$dados1->id_cliente;
	
	

	if($id1 == TRUE){
		echo "<script>alert('Exclua todos os planos ativos para executar esta função!');</script>"; 
	}else{
	mysql_query("UPDATE cadastro SET status = '1' WHERE id =$id"); 
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=abrecliente.php?id=$id'>";
	}
	
}
#EXCLUI PLANOS
if(isset($_POST["excluirPlanos"]) && !empty($_POST["excluirPlanos"])){
	$id_login=$_POST['excluirPlanos'];
	include('routerOS.api.php');

	$sql=mysql_query("SELECT * FROM servicos WHERE id=$id_login");
	$dados= mysql_fetch_object($sql);
	$login=$dados->login;
	$id_cliente=$dados->id_cliente;
	
	$sqlRadcct=mysql_query("SELECT * FROM `radacct` WHERE `username` LIKE '$login'");
	$verifica = mysql_fetch_object($sqlRadcct);
	$IP_MK = $verifica->nasipaddress;

	$MK_USER = 'php_api';
	$MK_SENHA = '1234';

	//$LOGIN_PPPOE = $_POST['login'];
	$LOGIN_PPPOE = $login;

	$API = new RouterosAPI();
	$API->debug = false;
	if ($API->connect($IP_MK, $MK_USER, $MK_SENHA)) {
		$API->write("/interface/pppoe-server/remove", false);
		$API->write("=numbers=<pppoe-".$LOGIN_PPPOE."");
		$API->read();
		$API->disconnect();
	}
	
	mysql_query("DELETE FROM `radcheck` WHERE `username` LIKE '$login'");

	
	mysql_query("DELETE FROM `radusergroup` WHERE `username` LIKE '$login'");

	mysql_query("DELETE FROM servicos WHERE id = $id_login");
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=abrecliente.php?id=$id_cliente'>";

}
#Excluir usuario
if(isset($_POST["excluirUsu"]) && !empty($_POST["excluirUsu"])){
	session_start();
	$id=$_POST['excluirUsu'];

	mysql_query("UPDATE login SET status = '1' WHERE id =$id");
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=listarUsuario.php'>";
}
#Desconectar Cliente
if(isset($_POST["descCliente"]) && !empty($_POST["descCliente"])){
	$id_login=$_POST['descCliente']; #ID do login vinculado ao cliente na tabela "servicos"
	include('routerOS.api.php');
	
	$sql=mysql_query("SELECT * FROM servicos WHERE id=$id_login");
	$dados= mysql_fetch_object($sql);
	$login=$dados->login;
	$id_cliente=$dados->id_cliente;
	
	$sqlRadcct=mysql_query("SELECT * FROM `radacct` WHERE `username` LIKE '$login'");
	$verifica = mysql_fetch_object($sqlRadcct);
	
	$IP_MK = $verifica->nasipaddress;
	$MK_USER = 'php_api';
	$MK_SENHA = '1234';

	//$LOGIN_PPPOE = $_POST['login'];
	$LOGIN_PPPOE = $login;

	$API = new RouterosAPI();
	$API->debug = false;
	if ($API->connect($IP_MK, $MK_USER, $MK_SENHA)) {
		$API->write("/interface/pppoe-server/remove", false);
		$API->write("=numbers=<pppoe-".$LOGIN_PPPOE."");
		$API->read();
		$API->disconnect();
	}
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=abrecliente.php?id=$id_cliente'>";
}
mysql_close($config);
?>
