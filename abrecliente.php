
        <!--AQUI SE ENCERRA O MENU-->
<?php
include('cabeca.php');
?>
        <!--AQUI COMEÇA O CORPO-->

<br><br>
      <div class="panel panel-black">
          <div class="panel-heading">
              <h4>Dados do Cliente</h4>
          </div>
         <div class="panel-body">
			 
<script>
function ExtratoRad(login) {
	var login;
	$.ajax({
		type:'POST',
		url:'extratoCon.php',
		data:'login='+login,
		success:function(html){
			$('#extrato').html(html);
		}
	});
}

function planosCli(id) {
	var id;
	$.ajax({
		type:'POST',
		url:'extratoCon.php',
		data:'id='+id,
		success:function(html){
			$('#extrato').html(html);
		}
	});
}
//ATIVA CLIENTE
function ativaCliente(valor) {
	var valor;
	//alert(valor);
	$.ajax({
		type:'POST',
		url:'ativaDesCli_ajax.php',
		data:'ativarCliente='+valor,
		success:function(html){
			$('#carregaAjax').html(html);
		}
	});
}
//DESATIVA CLIENTE
function desativaCliente(valor) {
	var valor;
	//alert(valor);
	$.ajax({
		type:'POST',
		url:'ativaDesCli_ajax.php',
		data:'desativarCliente='+valor,
		success:function(html){
			$('#carregaAjax').html(html);
		}
	});
}
function excluirPlano(valor) {
	var valor;
	//alert(valor);
	$.ajax({
		type:'POST',
		url:'ativaDesCli_ajax.php',
		data:'excluirPlanos='+valor,
		success:function(html){
			$('#carregaAjax').html(html);
		}
	});
}
function desconectarCliente(valor) {
	var valor;
	//alert(valor);
	$.ajax({
		type:'POST',
		url:'ativaDesCli_ajax.php',
		data:'descCliente='+valor,
		success:function(html){
			$('#carregaAjax').html(html);
		}
	});
}
 </script>
            <!-- Inicio Modal EXIBIR PLANOS -->
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"  onClick="window.location.reload()">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Planos</h4>
                </div>
            <div class="modal-body">
				<div id="extrato">
				<!-- INICIO AJAX (subistitui planos pelo extrato -->
    <?php
       include('conectar.php');
	   //EXIBE OS DADOS DE LOGIN PPOOE NO MODAL.
      //Faz um select na tabela servicos buscando o id_cliente, onde o mesmo tem que ser igual ao valor da variavel $id.
      $id=$_GET['id'];
      $sql2 = mysql_query("SELECT * FROM `servicos` WHERE `id_cliente` = $id");
      $count = mysql_num_rows($sql2);

        if ($count >= 1){
			echo " <button class=\"fa fa-refresh btn btn-info btn-xs\" aria-hidden=\"true\" onClick=\"window.location.reload()\"> Atualizar</button><br><br>";
            while ($dados2 = mysql_fetch_object($sql2)){
                  $idplano = $dados2->id_plano;

                  $sql3 = mysql_query("SELECT * FROM `planos` WHERE `id` = $idplano");
                  $dados3 = mysql_fetch_object($sql3);
				  
                  echo "<b> Plano: </b>";
                  echo $dados3->nome."<br>" ; #Nome do planocEX: FULL-10MEGA
                  echo "<b> Download: </b>";
                  echo $dados3->download ."<br>";
                  echo "<b> Upload: </b>";
                  echo $dados3->upload ."<br>";
				 
                  echo "<b> Login: </b>";
                  echo $dados2->login."<br>" ;
                  echo "<b> Senha: </b>";
                  echo $dados2->senha ."<br>";
                  echo "<b> MAC: </b>";
                  echo $dados2->mac ."<br>";
                  

                  $login = $dados2->login ;

                  $sql4 = mysql_query("SELECT * FROM `radacct` WHERE `username` LIKE '$login' ORDER BY `radacctid` DESC");
                  $dados4 = mysql_fetch_object($sql4);
                  $count4 = mysql_num_rows($sql4);

                  if ($count4 == 0){
                        echo "<b> Status: </b><i>Nunca conectou.</i><br>";

                  }
                  else {
					    
                        echo "<b> Número IP: </b>";
                        echo $dados4->framedipaddress ."<br>";
                        echo "<b> Hora de Conexão: </b>";
                        echo $dados4->acctstarttime ."<br>";
                        if ($dados4->acctstoptime == NULL) {
                         echo "<b> Status: <font color=blue>CONECTADO!</b></font><br><br>";
                        }
                        else {
							$desconectou = $dados4->acctstoptime;
                            echo " <b>Hora de Desconexão: </b>".$desconectou."<br>";
                            echo  "<b> Status: <font color=red>DESCONECTADO!</b></font><br><br>";
                        }

                       "<br>";
                  }
				  echo " <button class = \"btn btn-success btn-xs\" onclick=\"ExtratoRad('".$dados2->login."')\">Extrato de Conexão</button> ";
                  echo " <button class = \"btn btn-danger btn-xs\" onclick=\"excluirPlano('".$dados2->id."')\">Excluir Plano</button>";
                  echo " <button class = \"btn btn-danger btn-xs\" onclick=\"desconectarCliente('".$dados2->id."')\">Desconectar PPPOE</button> ";
                  echo "<hr>";
            }
      }
      else {
           echo "<div class=\"alert alert-danger\"><i>Nenhum Plano!</i></div>";
       }
    ?>
    </div> <!-- FIM AJAX -->
    
       </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.reload()" >Fechar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- FIM Modal EXIBIR PLANOS -->

<!-- /.modal -->
<?php
      //LISTA NA TELA OS DADOS DO CLIENTE
      //Faz um SELECT na tabela cadastro pegando o valor da variavel $id.
      $sql = mysql_query("SELECT * FROM cadastro WHERE id = $id");
      $dados = mysql_fetch_object($sql);

      echo "<a href=\"atendimento.php?id=$id\" class=\"btn btn-primary\" role=\"button\">Atendimentos</a> ";
      
      // enquanto houverem resultados...

      $id= $dados->id;
      $nome = $dados->nome;
      $datanasc = $dados->datanasc;
      $endereco = $dados->endereco;
      $cpf = $dados->cpf;
      $telefone = $dados->telefone;
      $cel = $dados->cel;
      $email = $dados->email;
      $referencia = $dados->referencia;
      $complemento = $dados->complemento;
      $estado = $dados->estado;
      $cep = $dados->cep;
      $rg = $dados->rg;
      $cidade = $dados->cidade;
?>
      
<!-- =========================================================================================================-->
<!--DROPDOWN OPÇÕES-->
		<div class="btn-group">
			<button type="button" class="btn btn-primary">Opções</button>
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			  <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">  
			  <?php
			  $status = $dados->status;
			  if($status == "0"){
			  echo "<li><a href=\"editarcliente.php?id=$id\">Editar Cliente</a></li>";
			  echo "<li><a data-toggle=\"modal\" data-target=\"#myModalll\">Desativar Cliente</a></li>";
			  }else{
			  echo "<li><a onclick=\"ativaCliente('$id')\">Ativar Cliente</a></li>";
			   }
			  ?>
			</ul>
		</div>
<!--DROPDOWN PLANOS-->
		<div class="btn-group">
			<?php
			if($status == 0){
			echo "<button type=\"button\" class=\"btn btn-primary\">Planos</button>";
			echo "<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">";
			}else{
				echo "<button type=\"button\" class=\"btn btn-primary disabled\">Planos</button>";
				echo "<button type=\"button\" class=\"btn btn-primary dropdown-toggle disabled\" data-toggle=\"dropdown\">";
			}
			?>
			  <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
			  <li><a data-toggle="modal" data-target="#myModal">Exibir Planos</a></li>
			  <li><a href="cadadcplano.php?id=<?php echo "$id"; ?>">Adicionar Planos</a></li>
			</ul>
		</div>
		<div id="carregaAjax"></div>
	<br>
<!-- INICIA Modal desativar Cliente -->

<div class="modal fade"  id="myModalll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"  onClick="window.location.reload()">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Tem certeza que deseja desativar este cliente?</h4>
		</div>
	<div class="modal-body">
	<button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
	<?php
		echo "<a onclick=\"desativaCliente('$id')\" class=\"btn btn-success\" role=\"button\">Sim</a> ";
	
	?>
<!-- FIM AJAX -->
	   </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.reload()" >Fechar</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div> 

<!-- FIM Modal desativar Cliente -->

<!-- /.modal -->

   	<div class="form-group">
		<form method="post" role="form">
			<fieldset>
				<div class="row">
					<div class="form-group col-sm-2">
					    <label>CÓD</label>
						<input type="text" class="form-control"  placeholder="<?php echo "$id"; ?>"  disabled="" >
					</div>
				</div>
				
				
				<!--AQUI VOU MECHER-->
				<div class="row">
					<div class="form-group col-sm-10">
					    <label>Nome</label>
					    <?php
					    if($status == "0"){ #CLIENTE ATIVO
						echo "<input type=\"text\" name=\"nome\" class=\"form-control\" placeholder=\"Nome e Sobrenome\" value=\"$nome\" readonly=\"readonly\">";
						}else{ #CLIENTE INATIVO
							$inativo = '(INATIVO)';
							echo "<input type=\"text\" name=\"nome\" class=\"form-control\" placeholder=\"Nome e Sobrenome\" value=\"$nome $inativo\" readonly=\"readonly\"> ";
						 }
						?>
					</div>
				</div>
				<div class="row">	
						<div class="form-group col-sm-4">
							<label>Data Nascimento</label>
							<input type="text" name="datanas" class="form-control date-mask" data-mask="00/00/0000" placeholder="dd/mm/aaaa" value="<?php echo "$datanasc"; ?>" readonly="readonly">
						</div>
				</div>
			   <div class="row">	
					<div class="form-group col-sm-6">
						<label>Endereço</label>
						<input type="text" name="endereco" class="form-control" placeholder="Ex.: Rua e Número" value="<?php echo "$endereco"; ?>" readonly="readonly">
					</div>
					<div class="form-group col-sm-4">
						<label>Complemento</label>
						<input type="text" name="complemento" class="form-control" value="<?php echo "$complemento"; ?>" readonly="readonly">
					</div>
			 </div>
			   <div class="row">
					<div class="form-group col-sm-6">
						<label>Cidade</label>	
							<input type="text" name="cidade" class="form-control" placeholder="Cidade" value="<?php echo "$cidade"; ?>" readonly="readonly">
					</div>
					<div class="form-group col-sm-2">
						<label>Estado</label>
							<input type="text" name="estado" class="form-control" placeholder="Estado" value="<?php echo "$estado"; ?>" readonly="readonly">
					</div>
					<div class="form-group col-sm-2">
						<label>CEP</label>
							<input type="text" name="cep" class="form-control" data-mask="00000-000" placeholder="Ex.: 00000-000"  value="<?php echo "$cep"; ?>" readonly="readonly">
					</div>
			  </div>
			<div class="row">
					<div class="form-group col-sm-10">
						<label>Referência</label>
							<input type="text" name="referencia" class="form-control" placeholder="Referência de Moradia"  value="<?php echo "$referencia"; ?>" readonly="readonly">
					</div>
			</div>
			<div class="row">
					<div class="form-group col-sm-5">
						<label>CPF</label>
							<input type="text" name="cpf" class="form-control" placeholder="Ex.: 000.000.000-00" data-mask=" 000.000.000-00"  value="<?php echo "$cpf"; ?>" readonly="readonly">
					</div>
					<div class="form-group col-sm-5">
						<label>RG</label>
							<input type="text" name="rg" class="form-control" placeholder="Ex.: 00.000.000-00" data-mask=" 00.000.000-00"  value="<?php echo "$rg"; ?>" readonly="readonly">
					</div>
			</div>		
			<div class="row">
					<div class="form-group col-sm-5">
						<label>Telefone</label>
							<input type="text" name="tel" class="form-control" data-mask="(000)0000-0000" placeholder="Ex.: (000)0000-0000"  value="<?php echo "$telefone"; ?>" readonly="readonly">
					</div>
					<div class="form-group col-sm-5">
						<label>Celular</label>
							<input type="text" name="cel" class="form-control" data-mask="(000)00000-0000" placeholder="Ex.: (000)00000-0000"  value="<?php echo "$cel"; ?>" readonly="readonly">
					</div>
			</div>
			<div class="row">
					<div class="form-group col-sm-7">
						<label>E-Mail</label>
							<input type="text" name="email" class="form-control" placeholder="Seu E-Mail"  value="<?php echo "$email"; ?>" readonly="readonly">
					</div>
			</div>
				</form>
					</fieldset>	
								<br>
							</div>
						</div>
					</div>
<?php
include('rodape.php');
mysql_close($config);
?>
