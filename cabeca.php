<?php
include('validasessao.php');
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
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
.panel-verde > .panel-heading {
  color: white;
  background-color: #76EE00;
  border-color: white;
}
</style>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="inicial.php">Sistema Integrado FastNet</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    
                <!-- /.dropdown -->
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
		<form action="buscar.php" method="post">
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
                            <a href="cadastro.php" style="color:black"><i class="fa fa-user fa-fw" style="color:black"></i> Cadastro Cliente</a>
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
                            <a href="ordemL.php" style="color:black"><i class="fa fa-file-text fa-fw" style="color:black"></i> Ordem de Serviço</a>
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
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!--AQUI SE ENCERRA O MENU-->

        <!--AQUI COMEÇA O CORPO-->
   <div id="page-wrapper">
