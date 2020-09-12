<?php
include('conectar.php');
	if (isset($_POST['envio'])) {
		$nplano = $_POST['nplano'];
		$down = $_POST['download'];
		$up = $_POST['upload'];

		$sql = mysql_query("INSERT INTO planos (nome, download, upload) VALUES ('$nplano', '$down', '$up')")or print(mysql_error());
			//insert na tabela RADGROUPCHECK
			   mysql_query("INSERT INTO radgroupcheck (groupname, attribute, op, value) VALUES ('$nplano', 'Pool-Name', ':=','pool_ok')")or print(mysql_error());
			   mysql_query("INSERT INTO radgroupcheck (groupname, attribute, op, value) VALUES ('$nplano', 'Simultaneous-Use', ':=','1')")or print(mysql_error());
			   mysql_query("INSERT INTO radgroupcheck (groupname, attribute, op, value) VALUES ('$nplano', 'Framed-Protocol', ':=','PPP')")or print(mysql_error());
			   mysql_query("INSERT INTO radgroupcheck (groupname, attribute, op, value) VALUES ('$nplano', 'Service-Type', ':=','Framed-User')")or print(mysql_error());

			   //insert na tabela RADGROUPREPLY
			   mysql_query("INSERT INTO radgroupreply (groupname, attribute, op, value) VALUES ('$nplano', 'Acct-Interim-Interval', ':=','300')")or print(mysql_error());
			   mysql_query("INSERT INTO radgroupreply (groupname, attribute, op, value) VALUES ('$nplano', 'Mikrotik-Rate-Limit', ':=','$up/$down')")or print(mysql_error());

			if ($sql) {
					echo "<script>alert('Dados enviados com Sucesso!');</script>";
				}else{
					echo "Verifique seu cadastro pois ocorreu algum erro!!";
				 }
			}
mysql_close($config);
?>