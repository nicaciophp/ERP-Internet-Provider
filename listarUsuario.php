<?php
include('cabeca.php');
include('conectar.php');
?>
<!-- INICIO AJAX -->
<script>
function excluirUsuario(valor) {
	var valor;
	$.ajax({
		type:'POST',
		url:'ativaDesCli_ajax.php',
		data:'excluirUsu='+valor,
		success:function(html){
			$('#teste').html(html);
		}
	});
}
//FUNÇÃO ALTERAR SENHA
function EditID(id){
	     var id_usuario = id;
	     document.getElementById("id_usuario").value=(id_usuario);
}
</script>
<br><br>
<div class="panel panel-verde">
	<div class="panel-heading">
		<h4>Usuários</h4>
	</div>
		<div class="panel-body">
		<div class="form-group">
<table class="table table-striped">
<?php
#Lista usuarios na tela
$id=$_GET['id'];

$sql = mysql_query("SELECT * FROM login");
$contar = mysql_num_rows($sql); 
$linha2=mysql_fetch_object($sql);
$id2 = $linha2->id;

if($contar >=1){
	echo "<thead>";
	echo "<tr>";
	echo "<td><b>Usuário</b></td>";
	echo "<td><b>Nome</b></td>";
	echo "<td class=\"hidden-xs\"><b>E-Mail</b></td>";
	echo "<td><b>Ações</b></td>";
	echo "</tr>";
	echo "</thead>";
	
	while($linha = mysql_fetch_object($sql)){
	  $id1 = $linha->id;
	  $status = $linha->status;
	  if($status == "0"){
		  echo "<tbody>";
		  echo "<tr>";
		  echo "<td>";
		  echo "<b>".$linha->username."</b>";
		  echo "</td>";
		  echo "<td>";
		  echo "<b>".$linha->nome."</b>";
		  echo "</td>";
		  echo "<td class=\"hidden-xs\">";
		  echo "<b>".$linha->email."</b>";
		  echo "</td>";
		  echo "<td>";
		  echo "<button  class=\"btn btn-xs btn-danger fa fa-times\" data-toggle=\"modal\" data-target=\"#excUsu\" onclick=\"excluirUsuario('".$id1."')\"></button>  "; #Exclui usuario
		  echo "<button  class=\"btn btn-xs btn-info fa fa-pencil-square-o\" data-toggle=\"modal\" data-target=\"#myModal\" onClick=\"EditID('".$id1."')\"></button>";#Altera senha de usuario
		  echo "</td>";
		  echo "</tr>";
		  echo "</tbody>";
	  }
	}
}

?>
		</table>
	</div>
</div>
</div>
<div id="teste"></div>
<!--modal alterar senha-->
<div class="modal fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"  onClick="window.location.reload()">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Alterar Senha</h4>
		</div>
	<div class="modal-body">
		<div class="alterarSenha"></div>
			<form method="post" action="alterarSenha.php">
				<input name="id" type="hidden" class="form-control" id="id_usuario" value="">
				<div class="row">
					<div class="form-group col-sm-10">
						<label>Nova Senha</label>
						<input type="text" name="senhaNova" class="form-control" placeholder="Nova Senha">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-10">
						<label>Confirmar nova Senha</label>
						<input type="text" name="senhaConfirm" class="form-control" placeholder="Confirmar Nova Senha">
					</div>
				</div>
				<button class="btn btn-primary fa fa-floppy-o"> Salvar</button> 
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.reload()" >Fechar</button>
		</div>
	</div>
</div>
	<!-- Fim modal ALTERAR SENHA-->
<?php
include('rodape.php');
mysql_close($config);
?>
