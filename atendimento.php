<?php
include('cabeca.php');
?>

<br><br>
     <div class="panel panel-purple">
      <div class="panel-heading">
         <h4> Atendimentos Pendentes</h4>
      </div>
        <div class="panel-body">
			<?php
				include('conectar.php');
				$id = $_GET['id'];
				
				echo "<a href=\"novoAtend.php?id=$id\" class=\"btn btn-primary\" role=\"button\">Novo Atendimento</a>  ";
				echo "<a href=\"registroAtend.php?id=$id\" class=\"btn btn-primary\" role=\"button\">Registro de Atendimentos</a><br><br>";
			?>
			<div class="form-group">	
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">	
<!-- /.modal -->
			  <?php				
				$res = mysql_query("SELECT * FROM `atendimentos` WHERE `id_cliente` = $id");
				$idT1 = mysql_query("SELECT id_cliente FROM atendimentos");
				$count = mysql_num_rows($res);		
			if($count >=1){
				echo "<thead>";
					echo "<tr class=\"success\">";
					echo "<th>Cargo</th>";
					echo "<th>Data</th>";
					echo "<th>Abrir Cliente</th>";
					echo "</tr>";
					echo "</thead>";
				while($linha = mysql_fetch_object($res)){
					$id1 = $linha->id;
					echo "<tbody>";
					echo "<tr class=\"info\">";
					echo "<td>".$linha->cargo."</td>";
					echo "<td>".$linha->data."</td>";
					echo "<td><a href=\"abreAtend.php?id=$id1\" role=\"button\" class=\"alert-link\">   Abrir Atendimento</a></td>";
					echo "</tr>";
					echo "</tbody>";
					echo "";
				}
			}else{
				echo "<div class=\"alert alert-danger\"><i>Nenhum atendimento pendente! </i><br></div>";
			 }
			$res2 = mysql_query("SELECT * FROM cadastro WHERE id=$id"); 
			$count2 = mysql_fetch_object($res2);
			$id2 = $count2->id;
			$nome = $count2->nome;			
			  ?>
							
							</table>
						</div>
						<?php echo "<a href=\"abrecliente.php?id=$id\" class=\"btn btn-info\" role=\"button\">Voltar</a> ";?>
					</div>
				<div class="panel-footer">
				<?php echo "CÓD: "."$id2"."  -  "."$nome";?>	
				</div>
        </div>
      </div><br><br><br>
   </div>
 <br>
 <?php
 include('rodape.php');
 mysql_close($config);
 ?>
