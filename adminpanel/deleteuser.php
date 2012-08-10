<?php 
 echo $login=@$_GET['login'];
include("mssql_connect.php");
$result=mysql_query("delete from user where login='$login'", $db);
?>