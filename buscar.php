<?php
include('cabeca.php');
?>
<br>
<div class="panel-body">
<div class="list-group">
	<a href="#" class="list-group-item list-group-item-action active">Resultado da Busca</a>
   <?php
	include('conectar.php');

	$busca=trim($_POST['caixabusc']);
	$sql = mysql_query("SELECT * FROM cadastro WHERE nome LIKE '%".$busca."%' OR cpf LIKE '%".$busca."%' OR endereco LIKE '%".$busca."%' OR id LIKE '%".$busca."%' OR cidade LIKE '%".$busca."%'");
	$count = mysql_num_rows($sql);

	if ($busca==NULL) {
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=inicial.php'>";
		   }else{
				if ($count >=1){
					while ($dados = mysql_fetch_object($sql)){
						// enquanto houverem resultados...
						$id=$dados->id;
						$nome=$dados->nome;
						echo "<a href=\"abrecliente.php?id=$id\" class=\"list-group-item list-group-item-action\"><b>$nome</b> <span class=\"badge badge-primary badge-pill\">CÓD - $id</span></a>";
						// exibir a coluna nome e a coluna cod...
					}	
				}else{
					echo "<div class=\"alert alert-danger\">";
					echo "<i>Nenhum resultado para a busca!</i>";
					echo "</div>";
				}
	}                        
?>
</div>
</div>
<?php
include('rodape.php');
mysql_close($config);
?>
