<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<table class="table table-condensed">
<h4><b>Extrato de Conexão</b></h4>
<?php
include('conectar.php');

if(isset($_POST["login"]) && !empty($_POST["login"])){

echo "<br />";
		//PEGA O VALOR DO SELECT DO HTML VIA POOST E FAZ UM SELECT NA TABELA, SE RETORNAR TRUE EXIBE O DADOS SE NÃO MOSTRA A MSG "NENHUM LOG ENCONTRADO"
		$idLogin = trim($_POST['login']);
		//FAZ UM SELECT NA TABELA RADACCT E COMPARA O LOGIN DA TABELA SERVIÇOS, SE FOREM IGUAIS RETORNA TRUE E IMPRIME TODOS NA TELA.
		$sql2 = mysql_query("SELECT * FROM `radacct` WHERE `username` LIKE '".$_POST['login']."' ORDER BY `radacctid` DESC");
		$count2 = mysql_num_rows($sql2);
		
		if($count2){
			echo "<thead>";
			echo "<tr>";
			echo "<th>Data e Hora Inicio</th>";
			echo "<th>Data e Hora Fim</th>";
			echo "<th>IP</th>";
			echo "</tr>";
			echo "</thead>";
			while($listar = mysql_fetch_object($sql2)){
				$id1 = $listar->id;
				$dataHoraInicio=$listar->acctstarttime;
				$dataHoraFim=$listar->acctstoptime;
				$user = $listar->username;
				$ip = $listar->framedipaddress;
				
				echo "<tbody>";
				echo "<tr>";
				echo "<td>"."<p class=\"text-success\">".$dataHoraInicio."</p>"."</td>";
				echo "<td>"."<p class=\"text-danger\">".$dataHoraFim."</p>"."</td>";
				echo "<td>"."<p class=\"text-primary\">".$ip."</p>"."</td>";
				echo "</tr>";
				echo "</tbody>";
			}
		}else{
			echo " <div class=\"alert alert-danger\">Nenhum log encontrado!</div>";
		}
		
	}
mysql_close($config);
?>
   </table>
</body>
</html>
