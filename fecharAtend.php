<?php
include('cabeca.php');
?>
<script src="js/jquery-3.2.1.min.js"></script>
<br><br>
     <div class="panel panel-purple">
      <div class="panel-heading">
          <h4>Fechar Ordem de Serviço</h4>
      </div>
        <div class="panel-body">
<!-- /.modal -->
			  <?php
				include('conectar.php');
					if (isset($_POST['salva'])) {
						$id=$_GET['id'];
						$nAtendimento = $_POST['natendimento'];
						$dataF = $_POST['dataF'];
						$ordem = mysql_query("SELECT * FROM atendimentos WHERE id=$id");
						$fAtend = mysql_query("UPDATE atendimentos SET ordem_fech = '$nAtendimento', data_f = '$dataF' WHERE id=$id");
						$fOrdem = mysql_query("INSERT INTO atendimentos_fech (id_cliente, ordemSer, ordemFech, cargo,dataIni, dataFech) SELECT id_cliente, ordem_ser, ordem_fech, cargo, data, data_f FROM atendimentos WHERE id=$id")or print(mysql_error());
						
						$dados = mysql_fetch_object($ordem);
						$idCliente = $dados->id_cliente;
						$ordemSer = $dados->ordemSer;
						
						if($fOrdem){
							$fechar = mysql_query("DELETE FROM atendimentos WHERE id = $id");
							echo "<script>alert('Atendimento Encerrado com Sucesso!');</script>";
							echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=atendimento.php?id=$idCliente'>";
						
						}
						
					}
						$id=$_GET['id'];
						$ordem = mysql_query("SELECT * FROM atendimentos WHERE id=$id");
						$dados = mysql_fetch_object($ordem);
						$idCliente = $dados->id_cliente;
						$res2 = mysql_query("SELECT * FROM cadastro WHERE id=$idCliente");
						$count2 = mysql_fetch_object($res2);
						$id3 = $count2->id;
						$nome = $count2->nome;
			  ?>
			<form method="post">
				<div class="row">
					<div class="form-group col-sm-2">
					  <label>Data de Fechamento:</label>
					  <input type ="text" class="form-control" data-mask="00/00/0000" placeholder="Ex.: dd/mm/aaaa" name="dataF">
					</div>
				</div>	
				<div class="row">
					<div class="form-group col-sm-10">
					  <label>Ordem de Serviço:</label>
					  <textarea class="form-control" rows="3" name = "natendimento" ></textarea>
					</div>
				</div>
					  <input type="submit" name="salva" value="Salvar" class="btn btn-primary">
				<?php
					echo "<a href=\"atendimento.php?id=$idCliente\" class=\"btn btn-info\" role=\"button\">Voltar</a> ";
				?>
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



