<?php
include('valida_sessao.php');
include('conectar.php');
include('envcadplano.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
	Nome do Plano:<input type="text" name="nplano"><br>
	Taxa download:<input type="text" name="download"><br>
	Taxa upload:  <input type="text" name="upload"><br>
				  <input type="submit" name="envio" value="Enviar">
</form>
<a href="listarPlano.php">Listar Planos</a>
</body>
</html>


