<?php
include('cabeca.php');
$id=$_GET['id'];
?>
	<br><br>
      <div class="panel panel-turquoise">
          <div class="panel-heading">
              <h4>Adicionar Planos</h4>
          </div><br>
                  <div class="panel-body">
					  <div class="form-group">
						   <button class="btn btn-danger" data-toggle="modal" data-target="#myModall">
								Deletar Plano
							</button>
							<!-- Modal -->
							<div class="modal fade" id="myModall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title" id="myModalLabel">Tem certeza que deseja excluir o plano?</h4>
								</div>
							<div class="modal-body">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
								<?php
									echo "<a href=\"deletarPlano.php?id=$id\" class=\"btn btn-success\" role=\"button\">Sim</a> ";
								
								?>
					   </div>
							<div class="modal-footer">
								
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
         <?php
            //LISTA NA TELA OS DADOS DO CLIENTE E DADOS DE SEU PLANO.
            include('conectar.php');
            //Faz um SELECT na tabela cadastro pegando o valor da variavel $id.
            $sql = mysql_query("SELECT * FROM planos WHERE id = $id");
            $dados = mysql_fetch_object($sql);
            //
            echo "<a href=\"editarPlano.php?id=$id\" class=\" btn btn-primary\" role=\"button\">Editar</a> ";
            echo "<br><br> ";

            // enquanto houverem resultados...
            $id= $dados->id;
            echo "<table class = \"table table-condensed\">";
            echo "<tr>";
            echo "<td>";
            echo'Nome: ';
            echo "</td>";
            echo "<td>";
            echo $dados->nome ."<br>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo'Taxa Download: ';
            echo "</td>";
            echo "<td>";
            echo $dados->download ."<br>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo'Taxa Upload: ';
            echo "</td>";
            echo "<td>";
            echo $dados->upload ."<br>";
            echo "</td>";
            echo "</tr>";
            echo "</table>";
            echo "<a href=\"listarPlano.php?id=$id\" class=\"btn btn-info\" role=\"button\">Voltar</a>";
        ?>
        </div>
       </div>
      </div>
   <?php
   include('rodape.php');
   mysql_close($config);
   ?>
