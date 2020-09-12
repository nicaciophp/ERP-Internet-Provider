<?php
include('cabeca.php');
?>
<script src="js/jquery-3.2.1.min.js"></script>
<br><br>
     <div class="panel panel-purple">
      <div class="panel-heading">
          <h4>Novo Atendimento</h4>
      </div>
        <div class="panel-body">
<!-- /.modal -->
		<form method="post" role="form">
		  <div class="row">	
			<div class="form-group col-sm-4">	
				<label>Selecionar Cargo:</label> 
				<select name="cargo" class="form-control">
					<option value="SAC">SAC</option>
					<option value="Suporte">Suporte</option>
					<option value="Financeiro">Financeiro</option>
					<option value="Comercial">Comercial</option>
		 		</select>
			</div>
		  </div>	
		  <div class="row">	
			<div class="form-group col-sm-4">
				<label>Data:</label>
				<input type = "text" class="form-control" data-mask="00/00/0000" placeholder="dd/mm/aaaa" name="data">
			</div>
		</div>
		<div class="row">	
			<div class="form-group col-sm-10">
				<label>Nova Ordem de Serviço:</label>
					  <textarea class="form-control" rows="3" name = "natendimento"></textarea>
			</div>
		</div>
					  <?php
						include('conectar.php');
						$id = $_GET['id'];
						echo "<a href=\"atendimento.php?id=$id\" class=\"btn btn-info\" role=\"button\">Voltar</a> ";
					  ?>
					  <input type="submit" name="salva" class="btn btn-primary" value="Salvar" >
					  <?php
						include('conectar.php');
						$nAtendimento = $_POST['natendimento'];
						$data = $_POST['data'];
						if(isset($_POST['salva'])){
						  if($nAtendimento == NULL){
							echo "<script>alert('Insira algo na caixa de texto!');</script>";
							echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=novoAtend.php?id=$id'>";
						  }else{
							  $id=$_GET['id'];
							  $cargo = $_POST['cargo'];
							  $sql = mysql_query("INSERT INTO atendimentos (id_cliente, ordem_ser, cargo, data) VALUES ('$id', '$nAtendimento', '$cargo', '$data')")or print(mysql_error());
							  if($sql){
								echo "<script>alert('Atendimento cadastrado com sucesso!');</script>";
								echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=atendimento.php?id=$id'>";
							  }else{
								  echo "<script>alert('Ocorreu algum problema, verifique sua coenxão com o BD!');</script>";
								  echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=novoAtend.php?id=$id'>";
								}
						    } 
						}
						$res2 = mysql_query("SELECT * FROM cadastro WHERE id=$id");
						$count2 = mysql_fetch_object($res2);
						$id2 = $count2->id;
						$nome = $count2->nome;
					  ?>
				</div>
			 </form>
				 <div class="panel-footer">
					<?php 
						echo "CÓD: "."$id2"."  -  "."$nome";
						mysql_close("$config");
					?>
			</div>
        </div>
      </div><br><br>
   </div>

<script src="js/jquery.mask.1.14.12.js"></script>
    <!-- jQuery -->

    <!--<script src="vendor/jquery/jquery.min.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
