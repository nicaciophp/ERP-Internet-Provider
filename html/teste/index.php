<?php
	include('validalogin.php');
	session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
<form method="post" >
	Login: <input type="text" name="login"><br>
	Senha: <input type="password" name="senha"><br>
		   <input type="submit" name="enviar" value="Logar">
		   <?php
		   if (isset($_SESSION['loginErro'])) {
		   	echo $_SESSION['loginErro'];
		   	unset($_SESSION['loginErro']);
		   }
		   ?>

</form>
</body>
</html>
