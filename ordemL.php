<?php
include('cabeca.php');
?>
	<script type="text/javascript">
		function abreOS(id){
			var id;

			$( "#loadOS" ).load( "ordemA.php?id="+id, 'f' + (Math.random()*1000000));
		 }
	</script>
<br><br>
     <div class="panel panel-purple">
      <div class="panel-heading">
          <h4>Atendimentos Pendentes</h4>
      </div>
		<div class = "panel-body">
			<div class= "form-group">
			<button class="fa fa-refresh btn btn-info" aria-hidden="true" onClick="window.location.reload()"> Atualizar</button>
			<br>
				<table class="table table-striped" >
					<thead class="">
						<tr>
						   <th>Cargo</th>
						   <th>Nome</th>
						  <th><center>Ações</center></th>
					   </tr>
					</thead>
					  <?php
						include('conectar.php');
						include('ordemV.php');
					  ?> 
					</table>
						</div>
				  <!-- Modal -->
					<div class="modal fade" id="modalOS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Ordem de Serviço</h4>
						</div>
						<div class="modal-body">
							 <form class="" id="form-conf-internet" method="POST" class="form-horizontal form-bordered" action="teste.php">
							<div id="loadOS"></div>
							 </form>
							</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
			<!-- /.modal-content -->
				</div>
		<!-- /.modal-dialog -->
			</div>
<!-- = = = = = = = = = == = = = = = = == = = == = = = = = = = =-->
			</div>
         </div>
        </div>
      </div><br><br><br>
   </div>
<br>
<?php
include('rodape.php');
mysql_close($config);
?>

