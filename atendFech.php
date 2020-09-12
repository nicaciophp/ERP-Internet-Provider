<?php
include('cabeca.php');
?>
<br><br>
     <div class="panel panel-purple">
      <div class="panel-heading">
         <h4> Atendimentos Fechados</h4>
      </div>
        <div class="panel-body">
<!-- /.modal -->
			  <?php
				include('conectar.php');
				$id = $_GET['id'];

				$res = mysql_query("SELECT * FROM atendimentos_fech WHERE id=$id");
				$idT1 = mysql_query("SELECT id_cliente FROM atendimentos");
				$count = mysql_num_rows($res);
			if($count >=1){
				while($linha = mysql_fetch_object($res)){
					$id1 = $linha->id_cliente;
					$id = $linha->id; 
					$ordemSer=$linha->ordemSer;
					$ordemFech=$linha->ordemFech;
					$dataFech=$linha->dataFech;
					$dataIni=$linha->dataIni;
				}
			}else{
				echo "<i>Nenhum atendimento pendente! </i><br><br>";
			 }	
					$res2 = mysql_query("SELECT * FROM cadastro WHERE id=$id1");
					$count2 = mysql_fetch_object($res2);
					$id2 = $count2->id;
					$nome = $count2->nome;	
			  ?>
			  <div class="form-group row">
			  <div class="col-xs-3">
				<label for="ex3">Cód:</label>
			  <input type="text" value="<?php echo "$id1";?> " class="form-control" id="ex3">
			  </div>
			  <div class="col-xs-3">
				<label for="ex3">Nome:</label>
			  <input type="text" value="<?php echo "$nome";?> " class="form-control" id="ex3">
			  </div>
			  <div class="col-xs-3">
				<label>Data de Inicio:</label>
			  <input type="text" value="<?php echo "$dataIni";?>" class="form-control" id="ex3"><br>
			  </div>
			  <div class="col-xs-3">
				<label>Data de Fechamento:</label>
			  <input type="text" value="<?php echo "$dataFech";?>" class="form-control" id="ex3"><br>
			  </div>
			  </div>
			  	<label>Ordem de Serviço:</label>
			  <textarea class="form-control" rows="3" name = "natendimento" ><?php echo "$ordemSer";?></textarea><br>
			  	<label>Ordem de Serviço Fechada:</label>
			  <textarea class="form-control" rows="3" name = "natendimento" ><?php echo "$ordemFech";?></textarea><br>
			  <?php
				echo "<a href=\"registroAtend.php?id=$id1\" class=\"btn btn-info\" role=\"button\">Voltar</a> ";
			  ?>
			  
            </div>
              <div class="panel-footer">
				<?php 
					echo "CÓD: "."$id2"."  -  "."$nome";
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

