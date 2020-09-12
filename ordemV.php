<?php
	$res = mysql_query("SELECT * FROM atendimentos");
	$count = mysql_num_rows($res);
						
		if($count >=1){
			while($linha = mysql_fetch_object($res)){
				$id1 = $linha->id;
				$id2 = $linha->id_cliente;
				$cargo = $linha->cargo;
				
				$res2 = mysql_query("SELECT * FROM cadastro WHERE id=$id2");//pega o id cliente na tabela atendimentos e compara com o da tabela cadastro.
				$count2=mysql_fetch_object($res2);
				$id3=$count2->id;// id tabela cliente
				$nome = $count2->nome;//nome tabela cliennte
				echo "<tbody>";
				echo "<tr>";
				echo "<td>".$cargo."</td>";
				echo "<td>".$nome."</td>";
				
				echo "<td>";
				echo "<center><a href=\"#$id1\" onclick=\"abreOS($id1)\" class=\"modalicon btn btn-xs btn-success\" data-toggle=\"modal\" data-target=\"#modalOS\">Visualizar Atendimento</a>  ";
				echo "<a href=\"abrecliente.php?id=$id3\" role=\"button\" class =\"btn btn-xs btn-warning\">Abrir Cliente</a></center>";
				echo "</td>";
				
				echo "</tr>";
				echo "</tbody>";
		}
	}
	else{
		echo "<br>";
		echo "<div class=\"alert alert-danger\"><i>Nenhum atendimento pendente! </i><br></div>";
	 }
 ?>

