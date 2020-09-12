<?php
include('valida_sessao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
Login PPPOE:<input type="text" name="login"><br>
Senha PPPOE:<input type="password" name="senha"><br>
MAC:		<input type="text" name="mac"><br>
<?php
	include('adcplano.php');
?>
<input type="submit" name="envadcplano">
</form>
</body>
</html>
