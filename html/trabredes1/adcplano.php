<label for="planos">Selecione um Plano:</label>
<select name="plano">
<?php
	include('conectar.php');
	$res = mysql_query("SELECT * FROM planos");
	$count = mysql_num_rows($res);

	if ($count >=1) {
		while($linha = mysql_fetch_object($res)){
			$id = $linha->id;
			echo "<option value='".$linha->id."'>".$linha->nome."</option>";
		}
	}

	if (isset($_POST['envadcplano'])) {
		$id = $_GET['id'];
		$plano = $_POST['plano'];
		$login = $_POST['login'];
		$mac =   $_POST['mac'];
		$senha = $_POST['senha'];
		$pass = "Cleartext-Password";    //atributo password tabela "radchek"
		$ope =  ":=";					//operação password tabela radcheck
		$pasw = "Calling-Station-Id";  //atributo MAC tabela radcheck
		$operacao = "==";			  //operação MAC tabela radchek

		$sql = mysql_query("SELECT nome FROM planos WHERE id = $plano");
  		$dados = mysql_fetch_object($sql);

        $nomeplano= $dados->nome;
		mysql_query("INSERT INTO radusergroup (username, groupname) VALUES ('$login', '$nomeplano')")or print(mysql_error());
		//Adiciona o ID_CLIENTE e ID_plano na tabela serviços, serve apenas para controle, e futuras pesquisas.
		mysql_query("INSERT INTO servicos(id_cliente, id_plano, login, mac, senha)VALUES('$id','$plano', '$login', '$mac', '$senha')") or print(mysql_error());

		//RADCHECK, CHECA OS DADOS DA SENHA DIGITADA NO CAMPO SENHA, SE CORRESPONREM COM A COLUNA VALUE RETORNA TRUE.
		mysql_query("INSERT INTO radcheck(username, attribute, op, value)VALUES('$login','$pass','$ope','$senha')") or print(mysql_error());

		//RADCHECK, CHECA OS DADOS DA SENHA DIGITADA NO CAMPO SENHA, SE CORRESPONREM COM A COLUNA VALUE RETORNA TRUE.
		mysql_query("INSERT INTO radcheck(username, attribute, op, value)VALUES('$login','$pasw','$operacao','$mac')") or print(mysql_error());

		header("Location: cadadcplano.php");
	}

	mysql_close($config);
?>
</select><br>