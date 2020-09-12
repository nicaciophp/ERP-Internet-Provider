<?php
$id=$_GET['id'];

include('conectar.php');
$busca=trim($_POST['caixabusc']);
$sql = mysql_query("SELECT * FROM cadastro WHERE id = $id");
$count = mysql_num_rows($sql);

if ($count == '0') {
      echo "Malandrão";
      die;
}

if (isset($_POST['salva'])) {
      $id=$_GET['id'];
      $nome = $_POST['nome'];
      $datanas = $_POST['datanas'];
      $endereco = $_POST['endereco'];
      $cpf = $_POST['cpf'];
      $tel = $_POST['tel'];
      $cel = $_POST['cel'];
      $email = $_POST['email'];
      $referencia = $_POST['referencia'];
      $inserir= mysql_query("UPDATE cadastro SET nome = '$nome', datanasc = '$datanas', endereco = '$endereco', cpf = '$cpf', telefone = '$tel', cel = '$cel', email = '$email', referencia = '$referencia' WHERE id = '$id';") or print(mysql_error());

      header("Location: index.php?a=abrecliente&id=$id");
}
else{
      $dados = mysql_fetch_object($sql);
      // enquanto houverem resultados...
      $id= $dados->id;
      $nome = $dados->nome ;
      $datanasc = $dados->datanasc ;
      $endereco = $dados->endereco ;
      $cpf = $dados->cpf ;
      $telefone = $dados->telefone ;
      $cel = $dados->cel ;
      $email = $dados->email ;
      $referencia = $dados->referencia ;
      ?>

      <form method="post">
      Nome:                   <input type="text" name="nome" value="<?php echo "$nome"; ?>">
      Data Nascimento:        <input type="text" name="datanas" value="<?php echo "$datanasc"; ?>"><br>
      Edenreço                <input type="text" name="endereco" value="<?php echo "$endereco"; ?>">
      CPF:                    <input type="text" name="cpf" value="<?php echo "$cpf"; ?>"><br>
      Telefone:               <input type="text" name="tel" value="<?php echo "$telefone"; ?>">
      Celular:                <input type="text" name="cel" value="<?php echo "$cel"; ?>"><br>
      E-Mail                  <input type="text" name="email" value="<?php echo "$email"; ?>">
      Referencia:             <input type="text" name="referencia" value="<?php echo "$referencia"; ?>"><br>
                              <input type="submit" name="salva" value="Salvar" >
      </form>
      <a href="index.php?a=inicial">Voltar</a>

<?php
}
mysql_close($config);
      
?>