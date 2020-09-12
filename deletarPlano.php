<?php
include('conectar.php');
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$sql2= mysql_query("SELECT id_plano FROM servicos WHERE id_plano = $id");
	$count = mysql_num_rows($sql2);
	if ($count == TRUE) {
		echo "<script>alert('Não é possivel excluir o plano o mesmo esta ativo!');</script>";
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=listarPlano.php'>";
	}else{
	$sql = mysql_query("DELETE FROM planos WHERE id = $id");
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=listarPlano.php'>";
	}
}
mysql_close($config);
?>
