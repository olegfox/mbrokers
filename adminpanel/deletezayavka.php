<?php
 $id=@$_GET['id'];
 include("mssql_connect.php");
 $result=mysql_query("delete from zayavka where id='$id';", $db);
?>