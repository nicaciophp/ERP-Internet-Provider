
<?php
include ('conectar.php');
$id = $_GET['id'];

	$res = mysql_query("SELECT * FROM atendimentos WHERE id='$id'");
	$count = mysql_num_rows($res);
						
		if($count >=1){
			while($linha = mysql_fetch_object($res)){
				$id1 = $linha->id;
				$ordem = $linha->ordem_ser;	
		}
	}
	else{
		echo "<i>Nenhum atendimento pendente! </i><br><br>";
	 }
mysql_close($config);
?>
<textarea class="form-control" rows="7" id="comment" name="ordem"><?php echo "$ordem";?></textarea><br>


