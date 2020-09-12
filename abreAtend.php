<?php
include('cabeca.php');
?>
<br><br>
     <div class="panel panel-purple">
      <div class="panel-heading">
          <h4>Ordem de Serviço</h4>
      </div>
        <div class="panel-body">
<!-- /.modal -->
			  <?php
				include('conectar.php');
				$id = $_GET['id'];
				
				$res = mysql_query("SELECT * FROM atendimentos WHERE id=$id");
			if (isset($_POST['salva'])) {
				$id=$_GET['id'];
				$nAtendimento = $_POST['natendimento'];
				$inserir= mysql_query("UPDATE atendimentos SET ordem_ser = '$nAtendimento' WHERE id = '$id'") or print(mysql_error());
				echo "<script>alert('Ordem de Serviço Alterada com Sucesso!');</script>";
				echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=abreAtend.php?id=$id'>";
            }
				$count = mysql_fetch_object($res);		
				$id = $count->id; 
				$id2 = $count->id_cliente;
				$ordemSer = $count->ordem_ser;
				
				$res2 = mysql_query("SELECT * FROM cadastro WHERE id=$id2");
				$count2 = mysql_fetch_object($res2);
				$id3 = $count2->id;
				$nome = $count2->nome;
			  ?>
			<form method="post">
			  <label>Ordem de Serviço:</label>
			  <textarea class="form-control" rows="3" name = "natendimento" ><?php echo "$ordemSer"; ?></textarea><br>
			   <?php
				echo "<a href=\"atendimento.php?id=$id3\" class=\"btn btn-info\" role=\"button\">Voltar</a> ";
				echo "<a href=\"fecharAtend.php?id=$id\" class=\"btn btn-success\" role=\"button\">Fechar Atendimento</a> ";
			   ?>
			  <input type='submit' name='salva' value='Salvar' class='btn btn-primary'>
			</form>
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
