<?php
include('conectar.php');
include('envcadplano.php');
?>

<form method="post" action="">
	Nome do Plano:<input type="text" name="nplano"><br>
	Taxa download:<input type="text" name="download"><br>
	Taxa upload:  <input type="text" name="upload"><br>
				  <input type="submit" name="envio" value="Enviar">
</form>