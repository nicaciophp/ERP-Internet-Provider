
<?php
	include('envia.php');
	include('conecta.php');
	echo "<a href=\"index.php?a=conexao&id=$id\">Conexão</a><br>";
?>
<form method="post">
Nome:				<input type="text" name="nome">
Data Nascimento:	<input type="text" name="datanas"><br>
Edenreço			<input type="text" name="endereco">
CPF:				<input type="text" name="cpf"><br>
Telefone:			<input type="text" name="tel">
Celular:			<input type="text" name="cel"><br>
E-Mail				<input type="text" name="email">
Referencia:			<input type="text" name="referencia"><br>
					<input type="submit" name="envia" value="Enviar">
</form>
