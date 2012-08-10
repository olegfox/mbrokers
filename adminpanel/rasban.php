<?php
include("mssql_connect.php");
 $rasban=@$_GET['rasban'];
 if($rasban!=""){
   $baning=mysql_query("delete from ban where IP='$rasban';", $db);
 }
 ?>