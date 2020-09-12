<?php
include('conectar.php');
	if (isset($_POST['enviar'])) {
			 $plano = $_POST['plano'];
			 $login = $_POST['login'];
			 $sql = mysql_query("INSERT INTO radusergroup (username, groupname) VALUES('$login', '$plano')") or print(mysql_error());
				 if ($sql) {
				 	echo "<script>alert('Dados enviados com Sucesso!');</script>";
				 }else{
				 	echo "ocorreu algum erro";
				 }
	}
mysql_close($config);
?>