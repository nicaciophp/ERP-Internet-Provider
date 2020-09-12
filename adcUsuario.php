<?php
include('cabeca.php');
include('enviaUsuario.php');
?>
<br><br>
<div class="panel panel-verde">
	<div class="panel-heading">
		<h4>Cadastro Novo Usuário</h4>
	</div>
	   <div class="panel-body">
		<div class="form-group">
			<form method="post" role="form">
			  <div class="row">	
				<div class="form-group col-sm-4">
				  <label>Nome Completo</label>
					<input type="text" name="nome" class="form-control" placeholder="Ex.: Nome completo" required>
				</div>
				<div class="form-group col-sm-4">
				  <label>E-Mail</label>
					<input type="email" name="email" class="form-control" placeholder="Ex.: exemplo@exemplo.com.br" autofocus>
				</div>
			  </div>
			  <div class="row">	
				<div class="form-group col-sm-4">		
				  <label>Nome de Usuario</label>
					<input type="email" name="usuario" class="form-control" placeholder="Ex.: exemplo@provedor" autofocus>
				</div>
				<div class="form-group col-sm-4">		
				  <label>Senha</label>
					<input type="text" name="senha" class="form-control" placeholder="Ex.: Minimo 8 digitos..." required>
				</div>
			 </div>
			 <div class="row">	
				<div class="form-group col-sm-4">		
				  <label>Nivel de Permissão</label>
					<select class="form-control" name="nivel">
						<option value="1">Administrador</option>
						<option value="2">Funcionário</option>
					</select>
				</div>
			 </div>
				<button type="submit" name="salva" class="btn btn-primary fa fa-floppy-o"> Salvar</button>
			</form>
		</div>
	</div>
<?php
include('rodape.php');
?>
