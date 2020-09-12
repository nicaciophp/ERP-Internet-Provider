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
      //LISTA NA TELA OS DADOS DO CLIENTE E DADOS DE SEU PLANO.
      $id=$_GET['id'];

      include('conectar.php');
      //Faz um SELECT na tabela cadastro pegando o valor da variavel $id.
      $sql = mysql_query("SELECT * FROM planos WHERE id = $id");
      $dados = mysql_fetch_object($sql);
      
      echo "<a href=\"editarcliente.php?id=$id\">Editar</a> ";
      echo "<a href=\"deletarPlano.php?id=$id\">Deletar Plano</a> ";
      echo "<a href=\"listarPlano.php?id=$id\">Voltar</a><br>";

      // enquanto houverem resultados...
      $id= $dados->id;
      echo'Nome: ';
      echo $dados->nome ."<br>";
      echo'Taxa Download: ';
      echo $dados->download ."<br>";
      echo'Taxa Upload: ';
      echo $dados->upload ."<br>";
?>
</body>
</html>
