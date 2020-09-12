<?php
include('cabeca.php');
?>
<br><br>
     <div class="panel panel-purple">
      <div class="panel-heading">
          <h4>Atendimentos Fechados</h4>
      </div>
        <div class="panel-body">
			<div class="form-group">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					
<!-- /.modal -->
			  <?php
				include('conectar.php');
				$id = $_GET['id'];
				
				$res = mysql_query("SELECT * FROM `atendimentos_fech` WHERE `id_cliente` = $id");
				$idT1 = mysql_query("SELECT id_cliente FROM atendimentos");
				$count = mysql_num_rows($res);
			if($count >=1){
				echo "<thead>
						<tr class=\"danger\">
						   <th>Cargo</th>
						   <th>Data de Fechamento</th>
						   <th>Abrir Cliente</th>
					   </tr>
					</thead>";
				while($linha = mysql_fetch_object($res)){
					$id1 = $linha->id;
					echo "<tbody>";
					echo "<tr class=\"warning\">";
					echo "<td>".$linha->cargo."</td>";
					echo "<td>".$linha->dataFech."</td>";
					echo "<td><a href=\"atendFech.php?id=$id1\" role=\"button\" class=\"alert-link\">   Abrir Atendimento</a></td>";
					echo "</tr>";
					echo "</tbody>";
					echo "";
					//echo $linha->cargo."  -  ".$linha->dataFech."  -  "."
				}
			}else{
				echo "<div class=\"alert alert-danger\"><i>Não consta registro de atendimento! </i><br></div>";
			 }		
			
				$res2 = mysql_query("SELECT * FROM cadastro WHERE id=$id");
				$count2 = mysql_fetch_object($res2);
				$id3 = $count2->id;
				$nome = $count2->nome;
			  ?>
				</table>
				</div>
					<?php echo "<a href=\"atendimento.php?id=$id\" class=\"btn btn-info\" role=\"button\">Voltar</a> ";?>
				</div>
				<div class="panel-footer">
				<?php 
					echo "CÓD: "."$id3"."  -  "."$nome";
					mysql_close("$config");
				?>
				</div>
        </div>
      </div><br><br><br>
   </div>
<br>
<?php
include('rodape.php');
?>

