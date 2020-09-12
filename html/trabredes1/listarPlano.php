<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include('conectar.php');
	$res = mysql_query("SELECT * FROM planos");
	$count = mysql_num_rows($res);

	if ($count == 0) {
		echo "<script>alert('Nenhum plano cadastrado!');</script>";
	}else{

		if ($count >=1) {
			while($linha = mysql_fetch_object($res)){
				$id = $linha->id;
				echo $linha->nome;
				echo "<a href=\"abrePlano.php?id=$id\">Visualizar Plano</a><br>";
				echo "<br>";
			}
		}
    }
			echo "<a href=\"cadplano.php?id=$id\">Voltar</a><br>";
?>
</body>
</html>
