<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<?php
			include('conectar.php');
					$lista=mysql_query("SELECT * FROM cadastro  ORDER by nome ASC");
					while($linha = mysql_fetch_array($lista)){
						echo $linha['nome']."<br>".$linha['datanasc']."<br>".$linha['endereco']."<br>".$linha['cpf']."<br>".$linha['tel']."<br>".$linha['cel']."<br>".$linha['email']."<br>".$linha['referencia'];
					}
		?>
</body>
</html>