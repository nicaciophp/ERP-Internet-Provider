<?php
include('cabeca.php');
?>

<?php
//EDITA OS DADOS DO CLIENTE
//Edita na tabela "cadastro" os dados desejados!
  

  include('conectar.php');
  $id=$_GET['id'];

  $sql = mysql_query("SELECT * FROM cadastro WHERE id = $id");
  $count = mysql_num_rows($sql);

  if ($count == '0') {
		echo "Malandrão";
		die;
  }

  if (isset($_POST['salva'])) {
		$nome = $_POST['nome'];
		$datanas = $_POST['datanas'];
		$endereco = $_POST['endereco'];
		$cpf = $_POST['cpf'];
		$tel = $_POST['tel'];
		$cel = $_POST['cel'];
		$email = $_POST['email'];
		$referencia = $_POST['referencia'];
		$cidade = $_POST['cidade'];
		$complemento = $_POST['complemento'];
		$estado = $_POST['estado'];
		$rg = $_POST['rg'];
		$cep = $_POST['cep'];
		$inserir= mysql_query("UPDATE cadastro SET nome = '$nome', datanasc = '$datanas', endereco = '$endereco', cpf = '$cpf', telefone = '$tel', cel = '$cel', email = '$email', referencia = '$referencia', cidade = '$cidade', complemento = '$complemento', estado = '$estado', cep = '$cep', rg = '$rg' WHERE id = '$id'") or print(mysql_error());
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=editarcliente.php?id=$id'>";
  }
  else{
		$dados = mysql_fetch_object($sql);
		// enquanto houverem resultados...
		$id= $dados->id;
		$nome = $dados->nome ;
		$datanas = $dados->datanasc ;
		$endereco = $dados->endereco ;
		$cpf = $dados->cpf ;
		$tel = $dados->telefone ;
		$cel = $dados->cel ;
		$email = $dados->email ;
		$referencia = $dados->referencia ;
		$cidade = $dados->cidade;
		$complemento = $dados->complemento;
		$estado = $dados->estado;
		$rg = $dados->rg;
		$cep = $dados->cep;
?>
<br><br>
     <div class="panel panel-black">
      <div class="panel-heading">
          <h4>Editar Cliente</h4>
      </div>
        <div class="panel-body">
<!-- /.modal -->
         <form method="post" role="form">
			 <fieldset>
				<div class="row">
					<div class="form-group col-sm-2">
					    <label>CÓD</label>
						<input type="text" class="form-control" placeholder="<?php echo "$id"; ?>"  disabled="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-10">
					    <label>Nome</label>
						<input type="text" name="nome" class="form-control" placeholder="Nome e Sobrenome" value="<?php echo "$nome"; ?>">
					</div>
				</div>
				<div class="row">	
						<div class="form-group col-sm-4">
							<label>Data Nascimento</label>
							<input type="text" name="datanas" class="form-control date-mask"  placeholder="dd/mm/aaaa" data-mask="00/00/0000" value="<?php echo "$datanas"; ?>">
						</div>
				</div>
			   <div class="row">	
					<div class="form-group col-sm-6">
						<label>Endereço</label>
						<input type="text" name="endereco" class="form-control" placeholder="Ex.: Rua e Número" value="<?php echo "$endereco"; ?>">
					</div>
					<div class="form-group col-sm-4">
						<label>Complemento</label>
						<input type="text" name="complemento" class="form-control" value="<?php echo "$complemento"; ?>">
					</div>
			 </div>
			   <div class="row">
					<div class="form-group col-sm-6">
						<label>Cidade</label>	
							<input type="text" name="cidade" class="form-control" placeholder="Cidade" value="<?php echo "$cidade"; ?>">
					</div>
					<div class="form-group col-sm-2">
						<label>Estado</label>
							<input type="text" name="estado" class="form-control" placeholder="Estado" value="<?php echo "$estado"; ?>">
					</div>
					<div class="form-group col-sm-2">
						<label>CEP</label>
							<input type="text" name="cep" class="form-control" data-mask="00000-000" placeholder="Ex.: 00000-000" data-mask="00000-000"  value="<?php echo "$cep"; ?>">
					</div>
			  </div>
			<div class="row">
					<div class="form-group col-sm-10">
						<label>Referência</label>
							<input type="text" name="referencia" class="form-control" placeholder="Referência de Moradia"  value="<?php echo "$referencia"; ?>">
					</div>
			</div>
			<div class="row">
					<div class="form-group col-sm-5">
						<label>CPF</label>
							<input type="text" name="cpf" class="form-control" placeholder="Ex.: 000.000.000-00" data-mask=" 000.000.000-00"  value="<?php echo "$cpf"; ?>">
					</div>
					<div class="form-group col-sm-5">
						<label>RG</label>
							<input type="text" name="rg" class="form-control" placeholder="Ex.: 00.000.000-00" data-mask=" 00.000.000-00"  value="<?php echo "$rg"; ?>">
					</div>
			</div>		
			<div class="row">
					<div class="form-group col-sm-5">
						<label>Telefone</label>
							<input type="text" name="tel" class="form-control" data-mask="(000)0000-0000" placeholder="Ex.: (000)0000-0000"  value="<?php echo "$tel"; ?>">
					</div>
					<div class="form-group col-sm-5">
						<label>Celular</label>
							<input type="text" name="cel" class="form-control" data-mask="(000)00000-0000" placeholder="Ex.: (000)00000-0000"  value="<?php echo "$cel"; ?>">
					</div>
			</div>
			<div class="row">
					<div class="form-group col-sm-7">
						<label>E-Mail</label>
							<input type="text" name="email" class="form-control" placeholder="Seu E-Mail"  value="<?php echo "$email"; ?>">
					</div>
			</div>
					</fieldset>
            <!--SUBMIT-->
            <input type="submit" name="salva" class="btn btn-primary" value="Salvar" >
            <!--SUBMIT-->
               <?php
                  }
                  echo "<a href=\"abrecliente.php?id=$id\" class=\"btn btn-info\" role=\"button\">Voltar</a>";
                  mysql_close($config);
               ?>
				</div>
			 </form>
			</div>
		  </div><br><br>
	   </div>
<br>
<?php
include('rodape.php');
mysql_close($config);
?>
