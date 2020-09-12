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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>PPI 2017</title>

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="inicial.php">Sistema PPI 2017</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                            <!--Inicia o Sistema de busca-->
                            <form action="buscar.php" method="post">
                                <input type="text" class="form-control" placeholder="Pesquisar..." name="caixabusc">
                                <span class="input-group-btn">
                                <input class="btn btn-default" type="submit" name="buscar" value="Buscar">
                                </span>
                            </form>
                            <!--Encerra o Sistema de busca-->
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Cadastro Cliente</a>
                        </li>
                        <!--Cadastro planos-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Cadastro Planos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Mostrar Planos</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Ordem de Serviço</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!--AQUI SE ENCERRA O MENU-->

        <!--AQUI COMEÇA O CORPO-->

   <div id="page-wrapper"><br>

    <?php
      //LISTA NA TELA OS DADOS DO CLIENTE E DADOS DE SEU PLANO.
      $id=$_GET['id'];

      include('conectar.php');
      //Faz um SELECT na tabela cadastro pegando o valor da variavel $id.
      $sql = mysql_query("SELECT * FROM cadastro WHERE id = $id");
      $dados = mysql_fetch_object($sql);

      echo "<a href=\"editarcliente.php?id=$id\" class=\"btn btn-info\" role=\"button\">Editar dados</a>";
      echo "<a href=\"deletarcliente.php?id=$id\" class=\"btn btn-info\" role=\"button\">Excluir Cliente</a>";
      echo "<a href=\"cadadcplano.php?id=$id\" class=\"btn btn-info\" role=\"button\">Adicionar Plano</a><br>";
      echo "<br>";
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
      ?>
      <form method="post">
      <div class="col-xs-3">
      <label for="cod">CÓD:</label>
      <input type="text" name="cod" value="<?php echo "$id"; ?>" class="form-control">
      </div>
      <div class="col-xs-3">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" value="<?php echo "$nome"; ?>" class="form-control"><br>
      </div>
      <div class="col-xs-3">
      <label for="datanas">Data de Nascimento:</label>
      <input type="text" name="datanas" value="<?php echo "$datanasc"; ?>" class="form-control">
      </div>
      <div class="col-xs-3">
      <label for="end">Endereço:</label>
      <input type="text" name="endereco" value="<?php echo "$endereco"; ?>" class="form-control"><br>
      </div>
      <div class="col-xs-3">
      <label for="cpf">CPF:</label>
      <input type="text" name="cpf" value="<?php echo "$cpf"; ?>" class="form-control">
      </div>
      <div class="col-xs-3">
      <label for="tel">Telefone:</label>
      <input type="text" name="tel" value="<?php echo "$telefone"; ?>" class="form-control"><br>
      </div>
      <div class="col-xs-3">
      <label for="cel">Celular:</label>
      <input type="text" name="cel" value="<?php echo "$cel"; ?>" class="form-control">
      </div>
      <div class="col-xs-3">
      <label for="email">E-Mail:</label>
      <input type="text" name="email" value="<?php echo "$email"; ?>" class="form-control"><br>
      </div>
      <div class="col-xs-3">
      <label for="ref">Referência:</label>
      <input type="text" name="referencia" value="<?php echo "$referencia"; ?>" class="form-control">
      </div><br>
      </form>


      <?php
      echo "<br>";
        echo"<h1>Planos</h1><br>";
            //Faz um select na tabela servicos buscando o id_cliente, onde o mesmo tem que ser igual ao valor da variavel $id.
      $sql2 = mysql_query("SELECT * FROM `servicos` WHERE `id_cliente` = $id");
      $count = mysql_num_rows($sql2);

        if ($count >= 1){
            while ($dados2 = mysql_fetch_object($sql2)){
                  $idplano = $dados2->id_plano;

                  $sql3 = mysql_query("SELECT * FROM `planos` WHERE `id` = $idplano");
                  $dados3 = mysql_fetch_object($sql3);

                  echo "<b>Plano: </b>";
                  echo $dados3->nome ."<br>";
                  echo "<b>Download: </b>";
                  echo $dados3->download ."<br>";
                  echo "<b>Upload: </b>";
                  echo $dados3->upload ."<br>";

                  echo "<b>Login: </b>";
                  echo $dados2->login ."<br>";
                  echo "<b>Senha: </b>";
                  echo $dados2->senha ."<br>";
                  echo "<b>MAC: </b>";
                  echo $dados2->mac ."<br>";

                  $login = $dados2->login ;

                  $sql4 = mysql_query("SELECT * FROM `radacct` WHERE `username` LIKE '$login' ORDER BY `radacctid` DESC");
                  $dados4 = mysql_fetch_object($sql4);
                  $count4 = mysql_num_rows($sql4);

                  if ($count4 == 0){
                        echo "<i>Nunca conectou.</i>";

                  }
                  else {
                        echo "<b>Número IP: </b>";
                        echo $dados4->framedipaddress ."<br>";
                        echo "<b>Hora de Conexão: </b>";
                        echo $dados4->acctstarttime ."<br>";
                        if ($dados4->acctstoptime == NULL) {
                              $desconectou = "<font color=blue>CONECTADO!</font>";
                        }
                        else {
                              $desconectou = $dados4->acctstoptime."-<font color=red>DESCONECTADO!</font>";
                        }

                        echo $desconectou ."<br>";
                  }

                  echo "<hr>";
            }
      }
      else {
           echo "Nenhum plano!";
       }
    ?>
   </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

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
