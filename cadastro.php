
<?php
	include('validasessao.php');
	include('envia.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FastNet</title>
	
	<!--<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">-->
	<!--<link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">-->
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=OpenSans:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<style>
.panel-black > .panel-heading {
  color: white;
  background-color: #2E2E2E;
  border-color: white;
}
.panel-purple > .panel-heading {
  color: white;
  background-color: #9933CC;
  border-color: white;
}
.panel-turquoise > .panel-heading {
  color: white;
  background-color: #00CED1;
  border-color: white;
}
</style>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top"  style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="inicial.php">Sistema Integrado FastNet</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw" style="color:#838B83"></i> <i class="fa fa-caret-down" style="color:#838B83"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
		<form action="buscar.php" method="post" data-toggle="validator">
			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                            <!--Inicia o Sistema de busca-->
                            
                                <input type="text" class="form-control" placeholder="Pesquisar..." name="caixabusc">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                </button>
                                </span>
                            </form>
                            <!--Encerra o Sistema de busca-->
                            </div>
                            <!-- /input-group -->
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="cadastro.php" style="color:black"><i class=" glyphicon glyphicon-user " style="color:black"></i> Cadastro Cliente</a>
                        </li>
                        <!--Cadastro planos-->
                        <li>
                            <a href="#" style="color:black"><i class="fa fa-wifi fa-fw" style="color:black"></i> Cadastro Planos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cadplano.php" style="color:black">Cadastro Plano</a>
                                </li>
                                <li>
                                    <a href="listarPlano.php" style="color:black">Mostrar Planos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="ordemL.php" style="color:black"><i class="glyphicon glyphicon-list-alt" style="color:black"></i> Ordem de Serviço</a>
                        </li>
                        <li>
						<?php
						session_start();
						if($_SESSION['nivel'] == 1){
							echo "<a href=\"#\" style=\"color:black\"><i class=\"fa fa-user-plus fa-fw\" style=\"color:black\"></i> Usuarios<span class=\"fa arrow\"></span></a>";
						
						}
						?>
						
						<ul class="nav nav-second-level">
							<li>
								<a href="adcUsuario.php" style="color:black">Novo Usuário</a>
							</li>
							<li>
								<a href="listarUsuario.php" style="color:black">Mostrar Usuarios</a>
							</li>
						</ul>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
            
        </nav>

        <!--AQUI SE ENCERRA O MENU-->

        <!--AQUI COMEÇA O CORPO-->

   <div id="page-wrapper"><br><br>
	   <div class="panel panel-black">
          <div class="panel-heading">
              <h4>Cadastro de Cliente</h4>
          </div>
   <div class="panel-body">
   	<div class="form-group">
		<form method="post" role="form">
			<fieldset>
				<div class="row">
					<div class="form-group col-sm-10">
					    <label for="textNome" class="control-label">Nome</label>
						<input id="textNome" type="text" name="nome" class="form-control" placeholder="Nome e Sobrenome" required>
					</div>
				</div>
				<div class="row">	
						<div class="form-group col-sm-4">
							<label>Data Nascimento</label>
							<input type="text" name="datanas" class="form-control " data-mask="00/00/0000" placeholder="dd/mm/aaaa" required>
						</div>
				</div>
			   <div class="row">	
					<div class="form-group col-sm-6">
						<label>Endereço</label>
						<input type="text" name="endereco" class="form-control" placeholder="Ex.: Rua e Número" required>
					</div>
					<div class="form-group col-sm-4">
						<label>Complemento</label>
						<input type="text" name="complemento" class="form-control">
					</div>
			 </div>
			   <div class="row">
					<div class="form-group col-sm-6">
						<label>Cidade</label>	
							<input type="text" name="cidade" class="form-control" placeholder="Cidade" required>
					</div>
					<div class="form-group col-sm-2">
						<label>Estado</label>
							<select class="form-control" name="estado" required> 
								<option value="ac">Acre</option> 
								<option value="al">Alagoas</option> 
								<option value="am">Amazonas</option> 
								<option value="ap">Amapá</option> 
								<option value="ba">Bahia</option> 
								<option value="ce">Ceará</option> 
								<option value="df">Distrito Federal</option> 
								<option value="es">Espírito Santo</option> 
								<option value="go">Goiás</option> 
								<option value="ma">Maranhão</option> 
								<option value="mt">Mato Grosso</option> 
								<option value="ms">Mato Grosso do Sul</option> 
								<option value="mg">Minas Gerais</option> 
								<option value="pa">Pará</option> 
								<option value="pb">Paraíba</option> 
								<option value="pr">Paraná</option> 
								<option value="pe">Pernambuco</option> 
								<option value="pi">Piauí</option> 
								<option value="rj">Rio de Janeiro</option> 
								<option value="rn">Rio Grande do Norte</option> 
								<option value="ro">Rondônia</option> 
								<option value="rs">Rio Grande do Sul</option> 
								<option value="rr">Roraima</option> 
								<option value="sc">Santa Catarina</option> 
								<option value="se">Sergipe</option> 
								<option value="sp">São Paulo</option> 
								<option value="to">Tocantins</option>
							</select>
					</div>
					<div class="form-group col-sm-2">
						<label>CEP</label>
							<input type="text" name="cep" class="form-control" data-mask="00000-000" placeholder="Ex.: 00000-000" required>
					</div>
			  </div>
			<div class="row">
					<div class="form-group col-sm-10">
						<label>Referência</label>
							<input type="text" name="referencia" class="form-control" placeholder="Referência de Moradia" required>
					</div>
			</div>
			<div class="row">
					<div class="form-group col-sm-5">
						<label>CPF</label>
							<input type="text" name="cpf" class="form-control" placeholder="Ex.: 000.000.000-00" data-mask=" 000.000.000-00" required>
					</div>
					<div class="form-group col-sm-5">
						<label>RG</label>
							<input type="text" name="rg" class="form-control" placeholder="Ex.: 00.000.000-00" data-mask=" 00.000.000-00" required>
					</div>
			</div>		
			<div class="row">
					<div class="form-group col-sm-5">
						<label>Telefone</label>
							<input type="text" name="tel" class="form-control" data-mask="(000)0000-0000" placeholder="Ex.: (000)0000-0000">
					</div>
					<div class="form-group col-sm-5">
						<label>Celular</label>
							<input type="text" name="cel" class="form-control" data-mask="(000)00000-0000" placeholder="Ex.: (000)00000-0000" required>
					</div>
			</div>
			<div class="row">
					<div class="form-group col-sm-7">
						<label>E-Mail</label>
							<input type="text" name="email" class="form-control" placeholder="Seu E-Mail" required>
					</div>
			</div>
					<button type="submit" name="envia" class="btn btn-primary fa fa-floppy-o"> Salvar</button>
				</form>
					</fieldset>	
							</div>
					   </div>
				   </div>
			   </div>
			</div>
    <!-- /#wrapper -->
	
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.zebra-datepicker.js"></script>
    
    <!-- jQuery -->
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!--BLIBLIOTECA LOCAL WEB-->
	<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--link para MASCARAS do formulario-->
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
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


