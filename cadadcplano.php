
        <!--AQUI SE ENCERRA O MENU-->

        <!--AQUI COMEÇA O CORPO-->
<?php
include('cabeca.php');
?>
<script src="js/jquery-3.2.1.min.js"></script>
  <br><br>
	   <div class="panel panel-turquoise">
          <div class="panel-heading">
              <h4>Adicionar Planos</h4>
          </div><br>
   <div class="panel-body">
   	<div class="form-group">
		<form method="post" role="form">
		<div class="row">	
			<div class="form-group col-sm-4">
				<label>Login PPOE</label>
				<input type="text" name="login" class="form-control"><br>
			</div>
		</div>
		<div class="row">	
			<div class="form-group col-sm-4">
				<label>Senha PPOE</label>
				<input type="password" name="senha" class="form-control"><br>
			</div>
	    </div>
		<div class="row">	
			<div class="form-group col-sm-4">
				<label>MAC</label>
				<input type="text" name="mac" placeholder="Ex.: 00:00:00:00:00:00" class="form-control mac" id="mac" style="text-transform: uppercase;" required  autocomplete="off"><br>
			</div>
		</div>
			<!--ADICIONA O ARQUIVO adcplano.php-->
		<?php
		   include('adcplano.php');
		   $id=$_GET['id'];
		   echo "<a href=\"abrecliente.php?id=$id\" class=\"btn btn-info\" role=\"button\">Voltar</a> ";
		   mysql_close($config);
		?>
		    <input type="submit" name="envadcplano" class="btn btn-primary" value="Salvar">
		</form>
        </div>
	 </div>
	</div>

  </div>
   </div>
    <!-- /#wrapper -->
	<script>
$(function() {
    $('.mac').mask('HH:HH:HH:HH:HH:HH');
});
</script>
<script src="js/jquery.mask.1.14.12.js"></script>
    <!-- jQuery -->

    <!--<script src="vendor/jquery/jquery.min.js"></script>-->

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
