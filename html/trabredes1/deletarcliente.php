<?php
include('conectar.php');
if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$sql = mysql_query("DELETE FROM cadastro WHERE id = $id");
	echo "<script>alert('Cliente deletado com sucesso!!');</script>";
	header("Location: inicial.php");
}
mysql_close($config);
?>