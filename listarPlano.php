<?php
include('cabeca.php');
?>
<br>
		<div class="panel panel-turquoise">
          <div class="panel-heading">
              <h4>Planos</h4>
          </div><br>
   			<div class="panel-body">
   	<div class="form-group">
		<table class="table table-striped">
			<?php
				include('conectar.php');
				$res = mysql_query("SELECT * FROM planos");
				$count = mysql_num_rows($res);

				if ($count == 0) {
					echo "<div class=\"alert alert-danger\">";
					echo "<i>Nenhum plano cadastrado!</i>";
					echo "</div>";
				}else{

				  if ($count >=1) {
					echo "<thead>";
					echo "<tr>";
					echo "<td><b>Nome Plano</b></td>";
					echo "<td><b>Taxa Download</b></td>";
					echo "<td><b>Taxa Upload</b></td>";
					echo "</tr>";
					echo "</thead>";  
					while($linha = mysql_fetch_object($res)){
					  $id = $linha->id;
					  echo "<tbody>";
					  echo "<tr>";
					  echo "<td>";
					  echo "<b>".$linha->nome."</b>";
					  echo "</td>";
					  echo "<td>";
					  echo "<b>".$linha->download."</b>";
					  echo "</td>";
					  echo "<td>";
					  echo "<b>".$linha->upload."</b>";
					  echo "</td>";
					  echo "<td>";
					  echo "<a href=\"abrePlano.php?id=$id\" class=\"btn btn-xs btn-success\">Visualizar Plano</a> ";
					  echo "</td>";
					  echo "</tr>";
					  echo "</tbody>";
					}
				  }
				}
			 ?>
		 </table>
		</div>
		 <?php
			#echo "<br>";
			echo "<a href=\"cadplano.php?id=$id\" class=\"btn btn-info\" role=\"button\">Voltar</a><br>";
		 ?>
	 </div>
	</div>
<?php
include('rodape.php');
mysql_close($config);
?>

