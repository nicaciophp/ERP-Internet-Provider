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
      $sql = mysql_query("SELECT * FROM cadastro WHERE id = $id");
      $dados = mysql_fetch_object($sql);
      
      echo "<a href=\"editarcliente.php?id=$id\">Editar</a> ";
      echo "<a href=\"deletarcliente.php?id=$id\">Deletar</a> ";
      echo "<a href=\"cadadcplano.php?id=$id\">Adicionar Plano</a><br>";

      // enquanto houverem resultados...
      $id= $dados->id;
      echo"ID:$id <br>";
      echo'Nome: ';
      echo $dados->nome ."<br>";
      echo'Data Nescimento: ';
      echo $dados->datanasc ."<br>";
      echo'Edenreço: ';
      echo $dados->endereco ."<br>";
      echo'CPF: ';
      echo $dados->cpf ."<br>";
      echo'Telefone: ';
      echo $dados->telefone ."<br>";
      echo'Celular: ';
      echo $dados->cel ."<br>";
      echo'E-Mail: ';
      echo $dados->email ."<br>";
      echo'Referência: ';
      echo $dados->referencia ."<br><hr>";

echo"<h1>Planos</h1>";

            //Faz um select na tabela servicos buscando o id_cliente, onde o mesmo tem que ser igual ao valor da variavel $id.
      $sql2 = mysql_query("SELECT * FROM `servicos` WHERE `id_cliente` = $id");
      $count = mysql_num_rows($sql2);

        if ($count >= 1){
            while ($dados2 = mysql_fetch_object($sql2)){
                  $idplano = $dados2->id_plano;

                  $sql3 = mysql_query("SELECT * FROM `planos` WHERE `id` = $idplano");
                  $dados3 = mysql_fetch_object($sql3);


                  echo $dados3->nome ."<br>";
                  echo $dados3->download ."<br>";
                  echo $dados3->upload ."<br>";

                  echo $dados2->login ."<br>";
                  echo $dados2->senha ."<br>";
                  echo $dados2->mac ."<br>";

                  $login = $dados2->login ;

                  $sql4 = mysql_query("SELECT * FROM `radacct` WHERE `username` LIKE '$login' ORDER BY `radacctid` DESC");
                  $dados4 = mysql_fetch_object($sql4);
                  $count4 = mysql_num_rows($sql4);

                  if ($count4 == 0){
                        echo "<i>Nunca conectou.</i>";

                  }
                  else {
                        echo $dados4->framedipaddress ."<br>";
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
</body>
</html>
