<?php
include('cabeca.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

  $(".enviarForm").click(function(){
        $(".enviarForm").hide();
        $( ".enviarAviso" ).show(  function() {
          $( this ).text( "Aguarde..." );
        });
        
    });
});
$( this ).html( "<b>Aguarde...</b>" );
</script>
<!--AQUI COMEÇA O CORPO-->
   <?php
      $id=$_GET['id'];

      include('conectar.php');
     // $busca=trim($_POST['caixabusc']);
      $sql = mysql_query("SELECT * FROM planos WHERE id = $id");
      $count = mysql_num_rows($sql);

      if ($count == '0') {
            echo "Malandrão";
            die;
      }

      if (isset($_POST['salva'])) {
            $id=$_GET['id'];
            $nplano = $_POST['nplano'];
            $download = $_POST['download'];
            $upload = $_POST['upload'];
            $inserir= mysql_query("UPDATE planos SET nome = '$nplano', download = '$download', upload = '$upload'WHERE id = '$id'") or print(mysql_error());
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=editarPlano.php?id=$id'>";
      }else{
            $dados = mysql_fetch_object($sql);
            // enquanto houverem resultados...
            $id= $dados->id;
            $nplano = $dados->nome ;
            $download = $dados->download ;
            $upload = $dados->upload ;
?>
</head>
<body>
<br><br>
     <div class="panel panel-turquoise">
      <div class="panel-heading">
          <h4>Editar Plano</h4>
      </div>
        <div class="panel-body">
<!-- /.modal -->
        <form method="post" role="form">
		  <div class="row">	
			<div class="form-group col-sm-4">
			  <label>Nome do Plano</label>
				<input type="text" name="nplano" class="form-control" value="<?php echo "$nplano";?>">
			</div>
		  </div>
		  <div class="row">	
			<div class="form-group col-sm-4">
			  <label>Taxa Download</label>
				<input type="text" name="download" class="form-control" value="<?php echo "$download";?>">
			</div>
		  </div>
		  <div class="row">	
			<div class="form-group col-sm-4">
			  <label>Taxa Upload</label>
				<input type="text" name="upload" class="form-control" value="<?php echo "$upload";?>">
			</div>
		  </div>
		  <span class="enviarAviso"></span>
		  <button type="submit" name="salva" class="enviarForm btn btn-primary">Salvar</button>
		   <?php
			  }
			  echo "<a href=\"abrePlano.php?id=$id\" class=\"btn btn-info\" role=\"button\">Voltar</a>";
			  mysql_close($config);
		   ?>
            </div>
         </form><br>
        </div>
      </div><br><br><br>
   </div>
<br>
<?php
include('rodape.php');
?>
