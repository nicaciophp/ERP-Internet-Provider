<?php
include('validasessao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <h1 class="page-header">
        Sistema
       <small>Redes</small>
 </h1>
    <a href="inicial.php">Inicio</a>
    <a href="cadastro.php">Cadastro</a>
    <a href="cadplano.php">Cadastrar Plano</a>
    <a href="logout.php">Sair</a>
<form method="post" action="buscar.php">
<input type="text" name="caixabusc">
<input type="submit" name="buscar" value="Buscar">
</form>
</body>
</html>

