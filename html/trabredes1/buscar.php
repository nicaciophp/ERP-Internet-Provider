<?php
include('validasessao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php
    	include('conectar.php');
        $busca=trim($_POST['caixabusc']);
    	$sql = mysql_query("SELECT * FROM cadastro WHERE nome LIKE '%".$busca."%' OR cpf LIKE '%".$busca."%'");
    	$count = mysql_num_rows($sql);

    if ($busca == NULL) {
        header("Location: inicial.php");
   }else{
        if ($count >= 1){
        while ($dados = mysql_fetch_object($sql)){
            // enquanto houverem resultados...
            $id=$dados->id;
            echo "<h3>".$dados->nome."</h3>"."<br>";
            echo "<a href=\"abrecliente.php?id=$id\">Abrir</a><br>";
            echo "<br>";
            // exibir a coluna nome e a coluna cod...
        }
       }else {
           echo "Nenhum resultado foi encontrado!";
       }
    }
    ?>
</body>
</html>
