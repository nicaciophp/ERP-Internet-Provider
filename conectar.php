<?php
$hostname = "localhost";
$database = "radius";
$username = "radius";
$password = "n1c4c10";

$config = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
$bd = mysql_select_db("$database", $config);
?>