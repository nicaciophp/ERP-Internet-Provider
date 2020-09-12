<?php
include('valida_sessao.php');
include('conectar.php');
include('envcadplano.php');
include('cabeca.php');
?>
<br><br>
				   <div class="panel panel-turquoise">
					  <div class="panel-heading">
						  <h4>Cadastro Novo Plano</h4>
					  </div>
			   <div class="panel-body">
				<div class="form-group">
					<form method="post" role="form">
					  <div class="row">	
						<div class="form-group col-sm-4">
						  <label>Nome do Plano</label>
							<input type="text" name="nplano" class="form-control" placeholder="Ex.: PLANO-VELOCIDADE">
					    </div>
					  </div>
					  <div class="row">	
						<div class="form-group col-sm-4">		
						  <label>Taxa Download</label>
							<input type="text" name="download" class="form-control"  placeholder="Ex.: 000k">
						</div>
					 </div>
					 <div class="row">	
						<div class="form-group col-sm-4">
						  <label>Taxa Upload</label>
							<input type="text" name="upload" class="form-control"  placeholder="Ex.: 000k">
						</div>
					</div>
						<input type="submit" name="envio" value="Enviar" class="btn btn-primary">
					</form>
				</div>
			</div>
<?php
include('rodape.php');
mysql_close($config);
?>





